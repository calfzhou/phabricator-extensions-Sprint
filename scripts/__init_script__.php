<?php

function init_phabricator_script() {

  const ROOT_DIR = '/opt/phacility';

  phutil_load_library("{$ROOT_DIR}/libphutil/src");
  phutil_load_library("{$ROOT_DIR}/phabricator/src");
  phutil_load_library("{$ROOT_DIR}/extensions/Sprint/src");
  phutil_load_library("{$ROOT_DIR}/arcanist/src");


  PhabricatorEnv::initializeScriptEnvironment();
}

init_phabricator_script();
