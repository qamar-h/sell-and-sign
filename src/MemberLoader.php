<?php

namespace QH\Sellandsign;

use QH\Sellandsign\Collection\MemberCollection;
use QH\Sellandsign\DataTransformer\MemberRequestToArrayTransfomer;
use QH\Sellandsign\DTO\MemberRequest;
use QH\Sellandsign\DTO\Factory\MemberFactory;
use QH\Sellandsign\DTO\Response;
use QH\Sellandsign\Exception\{ApiException, ExceptionHandler, MembersStructureException};

class MemberLoader extends AbstractSellandsign
{
    /**
     * @param MemberRequest $request
     * @return MemberCollection
     * @throws ApiException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function getMembers(MemberRequest $request)
    {
        $url = $this->apiUrl . '/GetLicenseMembers.action?j_token=' . $this->token . '&licenseId=' . $this->licenseId;
        $data = [
            'json' => (new MemberRequestToArrayTransfomer())->transform($request),
            'headers' => [
                'Content-Type' => 'application/json',
            ]
        ];

        $response = $this->httpClient->request('POST', $url, $data);

        ExceptionHandler::handleApiErrors($response);

        $result = json_decode($response->getContent(), true);

        if (!isset($result['GetLicenseMembersResult']) || !isset($result['GetLicenseMembersResult']['Members'])) {
            throw new MembersStructureException("Impossible to recover the members");
        }

        $menbersCollection = new MemberCollection;
        foreach($result['GetLicenseMembersResult']['Members'] as $member) {
            $menbersCollection->add(MemberFactory::fromArray($member));
        }

        return $menbersCollection;
    }

}