<?php
	function Transactions(){
		if (isset($_COOKIE['auth'])) {
			$user_id = $_COOKIE['auth'];
			$email = $_COOKIE['mailer'];
			require 'db.php';
			$stmt = "SELECT * FROM transactions WHERE recipient_email = ? OR sender_email = ? ORDER BY (id) DESC";
			$prep = $conn->prepare($stmt);
			$prep->execute([$email, $email]);
			$transactions = $prep->fetchAll();
			if (!empty($transactions)) {
				foreach ($transactions as $transaction) {
					if ($transaction['status'] == 1) {
						$status = '<span class="text-success" data-toggle="tooltip" data-original-title="Completed"><i class="fas fa-check-circle"></i></span>';
					}
					else{
						$status = '<span class="text-danger" data-toggle="tooltip" data-original-title="Cancelled"><i class="fas fa-times-circle"></i></span>';
					}
					if ($transaction['recipient_email'] == $email) {
						$type = '+';
						$direction = 'From '.$transaction['sender_username'];
						$description = 'Received '.$transaction['description'];
					}
					else{
						$type = '-';
						$direction = 'To '.$transaction['recipient_username'];
						$description = 'Sent '.$transaction['description'];
					}
					/*
					if ($transaction['type'] == 'credit') {
						$type = '+';
						$description = 'Received '.$transaction['description'];
					}
					else{
						$type = '-';
						$description = 'Sent '.$transaction['description'];
						
					}
					*/

					echo '
						<div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
	                <div class="row align-items-center flex-row">
	                  <div class="col-2 col-sm-1 text-center"> <span class="d-block text-4 font-weight-300">'.date('j', strtotime($transaction['created_at'])).'</span> <span class="d-block text-1 font-weight-300 text-uppercase">'.date('M, y', strtotime($transaction['created_at'])).'</span> </div>
	                  <div class="col col-sm-7"> <span class="d-block text-4">'.$direction.'</span> <span class="text-muted">'.$description.'</span> </div>
	                  <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3"> '.$status.' </div>
	                  <div class="col-3 col-sm-2 text-right text-4"> <span class="text-nowrap">'.$type.' $'.$transaction['amount'].'</span> <span class="text-2 text-uppercase">(USD)</span> </div>
	                </div>
	              </div>
					';
				}
				if (count($transactions)>10) {
					$more = '<div class="text-center mt-4"><a href="transactions" class="btn-link text-3">View all<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>';
				}
				else{
					$more = '';
				}
			}
			else{
				echo '<div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">No transactions yet</div>';
			}
		}
		else{
			echo "You need to login to view your transactions";
		}
	}
?>