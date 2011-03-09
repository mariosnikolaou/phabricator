<?php

/*
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

final class DiffusionBrowseTableView extends AphrontView {

  private $request;
  private $paths;

  public function setDiffusionRequest(DiffusionRequest $request) {
    $this->request = $request;
    return $this;
  }

  public function setPaths(array $paths) {
    $this->paths = $paths;
    return $this;
  }

  public function render() {
    $rows = array();
    foreach ($this->paths as $path) {
      $rows[] = array(
        phutil_escape_html($path->getPath()), // TODO: link
        // TODO: etc etc
      );
    }

    $view = new AphrontTableView($rows);
    $view->setHeaders(
      array(
        'Path',
      ));
    return $view->render();
  }

}
