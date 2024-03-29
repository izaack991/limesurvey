<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Aiplatform;

class LearningGenaiRootTokensAndLogProbPerDecodingStep extends \Google\Collection
{
  protected $collection_key = 'topCandidates';
  /**
   * @var LearningGenaiRootTokensAndLogProbPerDecodingStepCandidate[]
   */
  public $chosenCandidates;
  protected $chosenCandidatesType = LearningGenaiRootTokensAndLogProbPerDecodingStepCandidate::class;
  protected $chosenCandidatesDataType = 'array';
  /**
   * @var LearningGenaiRootTokensAndLogProbPerDecodingStepTopCandidates[]
   */
  public $topCandidates;
  protected $topCandidatesType = LearningGenaiRootTokensAndLogProbPerDecodingStepTopCandidates::class;
  protected $topCandidatesDataType = 'array';

  /**
   * @param LearningGenaiRootTokensAndLogProbPerDecodingStepCandidate[]
   */
  public function setChosenCandidates($chosenCandidates)
  {
    $this->chosenCandidates = $chosenCandidates;
  }
  /**
   * @return LearningGenaiRootTokensAndLogProbPerDecodingStepCandidate[]
   */
  public function getChosenCandidates()
  {
    return $this->chosenCandidates;
  }
  /**
   * @param LearningGenaiRootTokensAndLogProbPerDecodingStepTopCandidates[]
   */
  public function setTopCandidates($topCandidates)
  {
    $this->topCandidates = $topCandidates;
  }
  /**
   * @return LearningGenaiRootTokensAndLogProbPerDecodingStepTopCandidates[]
   */
  public function getTopCandidates()
  {
    return $this->topCandidates;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LearningGenaiRootTokensAndLogProbPerDecodingStep::class, 'Google_Service_Aiplatform_LearningGenaiRootTokensAndLogProbPerDecodingStep');
