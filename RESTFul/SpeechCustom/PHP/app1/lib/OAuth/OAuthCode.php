<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker: */

/**
 * OAuth Library
 * 
 * PHP version 5.4+
 * 
 * LICENSE: Licensed by AT&T under the 'Software Development Kit Tools 
 * Agreement.' 2013. 
 * TERMS AND CONDITIONS FOR USE, REPRODUCTION, AND DISTRIBUTIONS:
 * http://developer.att.com/sdk_agreement/
 *
 * Copyright 2013 AT&T Intellectual Property. All rights reserved.
 * For more information contact developer.support@att.com
 * 
 * @category Authentication 
 * @package OAuth
 * @copyright AT&T Intellectual Property
 * @license http://developer.att.com/sdk_agreement/
 */

/**
 * Basic class for storing an OAuth authorization code.
 * 
 * @package OAuth 
 */
class OAuthCode {

    // authorization code
    private $_code;

    /**
     * Creates an OAuth Code object with the specified code.
     *
     * @param string authorization code
     * @throws InvalidArgumentException if code is NULL
     */
    public function __construct($code) {
        if ($code == NULL) {
            throw new InvalidArgumentException('Code must not be NULL.');
        }

        if ($code == '') {
            throw new InvalidArgumentException('Code must not be empty.');
        }

        $this->_code = $code;
    }

    /**
     * Returns the OAuth code object as a string.
     *
     * @return string OAuth code as string
     */
    public function __toString() {

        return $this->_code;
    }
}

?>
