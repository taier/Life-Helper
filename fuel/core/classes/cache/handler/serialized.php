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



class Cache_Handler_Serialized implements Cache_Handler_Driver {

	public function readable($contents)
	{
		return unserialize($contents);
	}

	public function writable($contents)
	{
		return serialize($contents);
	}

}

/* End of file serialized.php */
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



class Cache_Handler_Serialized implements Cache_Handler_Driver {

	public function readable($contents)
	{
		return unserialize($contents);
	}

	public function writable($contents)
	{
		return serialize($contents);
	}

}

/* End of file serialized.php */
>>>>>>> 14df450602dd4bcf5892cf4ca20a9537ceb7848f
