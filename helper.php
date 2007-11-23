<?php
/**
 * Spell Checker Plugin
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Andreas Gohr <andi@splitbrain.org>
 */
// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

class helper_plugin_spellcheck extends DokuWiki_Plugin {

    /**
     * return some info
     */
    function getInfo(){
        return array(
            'author' => 'Andreas Gohr',
            'email'  => 'andi@splitbrain.org',
            'date'   => '2007-11-23',
            'name'   => 'Spell Checker Plugin',
            'desc'   => 'Sends the editor text to an aspell backend service to check for spelling errors',
            'url'    => 'http://wiki.splitbrain.org/plugin:spellcheck',
        );
    }

    /**
     * Returns an empty array - we do everything via JavaScript and AJAX
     */
    function getMethods(){
        return array();
    }
}
