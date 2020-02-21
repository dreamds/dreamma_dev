<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * 页面示例模板控制器
 * User: Dreamma
 * Date: 2019/3/14
 * Time: 16:19
 */

class Adm_template extends CI_Controller
{
    /**
     * 网页示例模板
     */
    public function index()
    {
        $this->load->view('adm/base/head.tpl');
        $this->load->view('adm/base/template.tpl');
        $this->load->view('adm/base/foot.tpl');
    }
}