<?php
/*
 * Copyright 2005-2014 MERETHIS
 * Centreon is developped by : Julien Mathis and Romain Le Merlus under
 * GPL Licence 2.0.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation ; either version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see <http://www.gnu.org/licenses>.
 *
 * Linking this program statically or dynamically with other modules is making a
 * combined work based on this program. Thus, the terms and conditions of the GNU
 * General Public License cover the whole combination.
 *
 * As a special exception, the copyright holders of this program give MERETHIS
 * permission to link this program with independent modules to produce an executable,
 * regardless of the license terms of these independent modules, and to copy and
 * distribute the resulting executable under terms of MERETHIS choice, provided that
 * MERETHIS also meet, for each linked independent module, the terms  and conditions
 * of the license of that module. An independent module is a module which is not
 * derived from this program. If you modify this program, you may extend this
 * exception to your version of the program, but you are not obliged to do so. If you
 * do not wish to do so, delete this exception statement from your version.
 *
 * For more information : contact@centreon.com
 *
 */

namespace Controllers\Configuration;

use \Models\Configuration\Host;

class HostTemplateController extends \Controllers\ObjectAbstract
{
    protected $objectDisplayName = 'Hosttemplate';
    protected $objectName = 'hosttemplate';
    protected $objectBaseUrl = '/configuration/hosttemplate';
    protected $objectClass = '\Models\Configuration\Host';

    /**
     * List hosttemplates
     *
     * @method get
     * @route /configuration/hosttemplate
     */
    public function listAction()
    {
        parent::listAction();
    }
    
    /**
     * 
     * @method get
     * @route /configuration/hosttemplate/formlist
     */
    public function formListAction()
    {
        parent::formListAction();
    }

    /**
     * 
     * @method get
     * @route /configuration/hosttemplate/list
     */
    public function datatableAction()
    {
        parent::datatableAction();
    }
    
    /**
     * Create a new hosttemplate
     *
     * @method post
     * @route /configuration/hosttemplate/create
     */
    public function createAction()
    {
        
    }

    /**
     * Update a hosttemplate
     *
     *
     * @method put
     * @route /configuration/hosttemplate/update
     */
    public function updateAction()
    {
        
    }
    
    /**
     * Add a hosttemplate
     *
     *
     * @method get
     * @route /configuration/hosttemplate/add
     */
    public function addAction()
    {
        parent::addAction();
    }
    
    /**
     * Update a hosttemplate
     *
     *
     * @method get
     * @route /configuration/hosttemplate/[i:id]
     */
    public function editAction()
    {
        
    }

    /**
     * Get the list of massive change fields
     *
     * @method get
     * @route /configuration/hosttemplate/mc_fields
     */
    public function getMassiveChangeFieldsAction()
    {
        parent::getMassiveChangeFieldsAction();
    }

    /**
     * Get the html of attribute filed
     *
     * @method get
     * @route /configuration/hosttemplate/mc_fields/[i:id]
     */
    public function getMcFieldAction()
    {
        parent::getMcFieldAction();
    }

    /**
     * Duplicate a hosts
     *
     * @method POST
     * @route /configuration/hosttemplate/duplicate
     */
    public function duplicateAction()
    {
        parent::duplicateAction();
    }

    /**
     * Apply massive change
     *
     * @method POST
     * @route /configuration/hosttemplate/massive_change
     */
    public function massiveChangeAction()
    {
        parent::massiveChangeAction();
    }

    /**
     * Delete action for hosttemplate
     *
     * @method post
     * @route /configuration/hosttemplate/delete
     */
    public function deleteAction()
    {
        parent::deleteAction();
    }
}