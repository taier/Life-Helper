<<<<<<< HEAD
<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package		Fuel
 * @version		1.0
 * @author		Fuel Development Team
 * @license		MIT License
 * @copyright	2010 - 2011 Fuel Development Team
 * @link		http://fuelphp.com
 */

namespace Fuel\Core;



interface Cache_Handler_Driver {

	/**
	 * Should make the contents readable
	 *
	 * @access	public
	 * @param	mixed
	 * @return	mixed
	 */
	public function readable($contents);

	/**
	 * Should make the contents writable
	 *
	 * @access	public
	 * @param	mixed
	 * @return	mixed
	 */
	public function writable($contents);
}

/* End of file driver.php */
=======
<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Fuel\Core;



interface Cache_Handler_Driver {

	/**
	 * Should make the contents readable
	 *
	 * @access	public
	 * @param	mixed
	 * @return	mixed
	 */
	public function readable($contents);

	/**
	 * Should make the contents writable
	 *
	 * @access	public
	 * @param	mixed
	 * @return	mixed
	 */
	public function writable($contents);
}

/* End of file driver.php */
>>>>>>> 14df450602dd4bcf5892cf4ca20a9537ceb7848f
