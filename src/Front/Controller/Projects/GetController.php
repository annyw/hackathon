<?php
/**
 * Part of Front project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Front\Controller\Projects;

use Front\Model\ProjectsModel;
use Front\View\Projects\ProjectsHtmlView;
use Phoenix\Controller\Display\ListDisplayController;
use Windwalker\Core\Model\ModelRepository;
use Windwalker\Core\View\AbstractView;

/**
 * The GetController class.
 * 
 * @since  1.0
 */
class GetController extends ListDisplayController
{
	/**
	 * The default Model.
	 *
	 * If set model name here, controller will get model object by this name.
	 *
	 * @var  ProjectsModel
	 */
	protected $model = 'Projects';

	/**
	 * Main View.
	 *
	 * If set view name here, controller will get model object by this name.
	 *
	 * @var  ProjectsHtmlView
	 */
	protected $view = 'Projects';

	/**
	 * Property ordering.
	 *
	 * Please remember add table alias.
	 *
	 * @var  string
	 */
	protected $defaultOrdering = 'project.id';

	/**
	 * Property direction.
	 *
	 * @var  string
	 */
	protected $defaultDirection = 'DESC';

	/**
	 * The list limit per page..
	 *
	 * Use 0 to set unlimited.
	 *
	 * @var integer
	 */
	protected $limit;

	/**
	 * A hook before main process executing.
	 *
	 * @return  void
	 */
	protected function prepareExecute()
	{
		parent::prepareExecute();
	}

	/**
	 * Prepare view and default model.
	 *
	 * You can configure default model state here, or add more sub models to view.
	 * Remember to call parent to make sure default model already set in view.
	 *
	 * @param AbstractView    $view  The view to render page.
	 * @param ModelRepository $model The default mode.
	 *
	 * @return  void
	 */
	protected function prepareViewModel(AbstractView $view, ModelRepository $model)
	{
		/**
		 * @var $view  ProjectsHtmlView
		 * @var $model ProjectsModel
		 */
		parent::prepareViewModel($view, $model);

		// Configure view and model here...
	}

	/**
	 * Check user has access to view this page.
	 *
	 * Throw exception with 4xx code to block unauthorised access.
	 *
	 * @return  bool Return FALSE if use has no access to view page.
	 *
	 * @throws \RuntimeException
	 * @throws \Windwalker\Router\Exception\RouteNotFoundException (404)
	 * @throws \Windwalker\Core\Security\Exception\UnauthorizedException (401 / 403)
	 */
	public function authorise()
	{
		return parent::authorise();
	}

	/**
	 * A hook after main process executing.
	 *
	 * @param mixed $result The result content to return, can be any value or boolean.
	 *
	 * @return  mixed
	 */
	protected function postExecute($result = null)
	{
		return parent::postExecute($result);
	}
}
