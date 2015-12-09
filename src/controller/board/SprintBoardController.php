<?php

abstract class SprintBoardController
  extends SprintController {

  private $project;

  protected function setProject(PhabricatorProject $project) {
    $this->project = $project;
    return $this;
  }
  protected function getProject() {
    return $this->project;
  }

  public function buildIconNavView(PhabricatorProject $project) {
        $id = $project->getID();
        $nav = parent::buildIconNavView($project);
        $nav->selectFilter("board/{$id}/");
        $nav->addClass('project-board-nav');
        return $nav;
  }
}
