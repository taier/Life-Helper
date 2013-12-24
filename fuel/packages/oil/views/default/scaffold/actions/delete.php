<<<<<<< HEAD
		$<?php echo $singular; ?> = <?php echo $model; ?>::find($id);

		if ($<?php echo $singular; ?> and $<?php echo $singular; ?>->delete())
		{
			Session::set_flash('notice', 'Deleted ' . $<?php echo $singular; ?> . ' #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete ' . $<?php echo $singular; ?> . ' #' . $id);
		}

		Output::redirect('<?php echo $plural; ?>');
=======
		if ($<?php echo $singular; ?> = <?php echo $model; ?>::find($id))
		{
			$<?php echo $singular; ?>->delete();
			
			Session::set_flash('notice', 'Deleted <?php echo $singular; ?> #' . $id);
		}

		else
		{
			Session::set_flash('notice', 'Could not delete <?php echo $singular; ?> #' . $id);
		}

		Response::redirect('<?php echo $plural; ?>');
>>>>>>> 14df450602dd4bcf5892cf4ca20a9537ceb7848f
