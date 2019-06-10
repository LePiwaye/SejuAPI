<?php

namespace RiotPHP\Endpoints\Riot;

/**
 * Class LolStatusEndpoint
 * This class is related to the /lol/lol-status/v3/ API endpoint.
 * It's basically all the available methods embedded in the RiotPHP environment
 * @package RiotPHP
 * @author Piwaye
 * @since 1.0
 * @version 1.0
 */
class LolStatusEndpoint extends GenericEndpoint
{
    public function __construct(){
        parent::__construct();
        $this->endpointName = \RiotPHP\Collections\Riot\EndpointDescriptor::LOL_STATUS;
    }

     /**
     * Get the shard status for the current server
     * @see /lol/status/v3/shard-data
     * @author Piwaye
     * @since 1.0
     * @version 1.0
     * @return array|string Data array
     */
    public function getShardData(){
        $query = "https://" . $this->host . "/lol/status/v3/shard-data";
        $response = $this->callManager->sendQuery($this->endpointName, $this->serviceRegion, \RiotPHP\Collections\Riot\QueryHeader::GET, $query);

        if(is_array($response)){
            $responseDTO = new \RiotPHP\DTO\Riot\ShardStatusDTO();

            $responseDTO->setName($response["name"]);
            $responseDTO->setRegionTag($response["region_tag"]);
            $responseDTO->setHostname($response["hostname"]);
            $responseDTO->setSlug($response["slug"]);

            $localesArray = array();
            if(array_key_exists('locales', $response) && is_array($response['locales'])){
                for($IR = 0; $IR < count($response['locales']); $IR++){
                    $localesArray[] = $response['locales'][$IR];
                }
            }

            $responseDTO->setLocales($localesArray);

            //Set services
            $servicesArray = array();
            if(array_key_exists('services', $response) && is_array($response['services'])){
                for($IR = 0; $IR < count($response['services']); $IR++){
                    $serviceDTO = new \RiotPHP\DTO\Riot\ServiceDTO();

                    $serviceDTO->setStatus($response['services'][$IR]["status"]);
                    $serviceDTO->setName($response['services'][$IR]["name"]);
                    $serviceDTO->setSlug($response['services'][$IR]["slug"]);

                    //Set incidents
                    $incidentsArray = array();
                    if(array_key_exists('incidents', $response['services'][$IR]) && is_array($response['services'][$IR]["incidents"])){
                        for($IRI = 0; $IRI < count($response['services'][$IR]["incidents"]); $IRI++){
                            $incidentDTO = new \RiotPHP\DTO\Riot\IncidentDTO();

                            $incidentDTO->setId($response['services'][$IR]["incidents"][$IRI]["id"]);

                            if($response['services'][$IR]["incidents"][$IRI]["active"] == 1)
                                $incidentDTO->setActive(true);
                            else
                                $incidentDTO->setActive(false);

                            $incidentDTO->setCreatedAt($response['services'][$IR]["incidents"][$IRI]["created_at"]);

                            //Set updates
                            $messagesArray = array();
                            if(array_key_exists('updates', $response['services'][$IR]["incidents"][$IRI]) 
                                && is_array($response['services'][$IR]["incidents"][$IRI]["updates"])){
                                    for($IRU = 0; 
                                        $IRU < count($response['services'][$IR]["incidents"][$IRI]["updates"]); 
                                        $IRU++)
                                    {
                                        $messageDTO = new \RiotPHP\DTO\Riot\MessageDTO();
                                        $messageDTO->setId($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["id"]); 
                                        $messageDTO->setAuthor($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["author"]);
                                        $messageDTO->setContent($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["content"]);
                                        $messageDTO->setSeverity($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["severity"]);   
                                        $messageDTO->setCreatedAt($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["created_at"]); 
                                        $messageDTO->setUpdatedAt($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["updated_at"]); 

                                        //Set translations
                                        $translationsArray = array();

                                        if(array_key_exists('translations', $response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]) 
                                            && is_array($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["translations"])){
                                                for($IRT = 0; 
                                                    $IRT < count($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["translations"]); 
                                                    $IRT++)
                                                {
                                                    $translationDTO = new \RiotPHP\DTO\Riot\TranslationDTO();
                                                    $translationDTO->setLocale($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["translations"][$IRT]["locale"]);
                                                    $translationDTO->setContent($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["translations"][$IRT]["content"]);
                                                    $translationDTO->setHeading($response['services'][$IR]["incidents"][$IRI]["updates"][$IRU]["translations"][$IRT]["heading"]);
                                                    $translationsArray[] = $translationDTO;
                                                }
                                        }

                                        $messageDTO->setTranslations($translationsArray);

                                        $messagesArray[] = $messageDTO;
                                    }
                            }

                            $incidentDTO->setUpdates($messagesArray);

                            $incidentsArray[] = $incidentDTO;
                        }
                    }

                    $serviceDTO->setIncidents($incidentsArray);

                    $servicesArray[] = $serviceDTO;
                }
            }

            $responseDTO->setServices($servicesArray);


            return $responseDTO;
        }       

        throw new \RiotPHP\Exceptions\Riot\UnsupportedAPICall();
    }
}