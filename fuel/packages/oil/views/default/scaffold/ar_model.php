<<<<<<< HEAD
<?php echo '<?php' ?>

class Model_<?php echo ucfirst($name); ?> extends ActiveRecord\Model {
<?php if (isset($table)): ?>
	protected $table = '<?php echo $table; ?>';
<?php endif; ?>

}

/* End of file <?php echo strtolower($name); ?>.php */
=======
<?php echo '<?php' ?>

class Model_<?php echo ucfirst($name); ?> extends Orm\Model {
<?php if (isset($table)): ?>
	protected static $_table_name = '<?php echo $table; ?>';
<?php endif; ?>

}

/* End of file <?php echo Str::lower($name); ?>.php */
>>>>>>> 14df450602dd4bcf5892cf4ca20a9537ceb7848f
