<?php

namespace Drupal\build_hooks\Entity;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface for defining Frontend environment entities.
 */
interface FrontendEnvironmentInterface extends ConfigEntityInterface {

  /**
   * Get the url of the environment.
   *
   * @return string
   */
  public function getUrl();

  /**
   * Get the weight of the environment.
   *
   * @return int
   */
  public function getWeight();

  /**
   * Get the deployment strategy of the environment.
   *
   * @return string
   */
  public function getDeploymentStrategy();

  /**
   * Sets the deployment strategy of the environment.
   *
   * @param string $deploymentStrategy
   *   The deployment strategy.
   */
  public function setDeploymentStrategy($deploymentStrategy);

  /**
   * Gets the frontend environment plugin for this environment.
   *
   * @return \Drupal\build_hooks\Plugin\FrontendEnvironmentInterface
   */
  public function getPlugin();

}
