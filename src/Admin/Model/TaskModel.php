<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Admin\Model;

use Admin\Record\TaskRecord;
use Phoenix\Model\AdminModel;
use Windwalker\Data\DataInterface;
use Windwalker\Record\Record;

/**
 * The TaskModel class.
 * 
 * @since  1.0
 */
class TaskModel extends AdminModel
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'Task';

	/**
	 * Property record.
	 *
	 * @var  string
	 */
	protected $record = 'Task';

	/**
	 * Property mapper.
	 *
	 * @var  string
	 */
	protected $mapper = 'Task';

	/**
	 * Property reorderConditions.
	 *
	 * @var  array
	 */
	protected $reorderConditions = [];

	/**
	 * Property reorderPosition.
	 *
	 * @var  string
	 */
	protected $reorderPosition = self::ORDER_POSITION_LAST;

	/**
	 * postGetItem
	 *
	 * @param DataInterface|TaskRecord $item
	 *
	 * @return  void
	 */
	protected function postGetItem(DataInterface $item)
	{
		// Do some stuff
	}

	/**
	 * prepareRecord
	 *
	 * @param Record|TaskRecord $record
	 *
	 * @return  void
	 */
	protected function prepareRecord(Record $record)
	{
		parent::prepareRecord($record);
	}

	/**
	 * postSaveHook
	 *
	 * @param Record|TaskRecord $record
	 *
	 * @return  void
	 */
	protected function postSaveHook(Record $record)
	{
		parent::postSaveHook($record);
	}

	/**
	 * getReorderConditions
	 *
	 * @param Record|TaskRecord $record
	 *
	 * @return  array  An array of conditions to add to ordering queries.
	 */
	public function getReorderConditions(Record $record)
	{
		return parent::getReorderConditions($record);
	}

	/**
	 * Method to set new item ordering as first or last.
	 *
	 * @param   Record|TaskRecord $record   Item table to save.
	 * @param   string              $position `first` or other are `last`.
	 *
	 * @return  void
	 */
	public function setOrderPosition(Record $record, $position = self::ORDER_POSITION_LAST)
	{
		parent::setOrderPosition($record, $position);
	}
}
