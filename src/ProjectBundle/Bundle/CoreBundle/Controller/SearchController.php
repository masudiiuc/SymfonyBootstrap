<?php

namespace ProjectBundle\Bundle\CoreBundle\Controller;


class SearchController extends BaseController
{
    public function searchAction()
    {
        print_r($_REQUEST);die;
    }

    public function getLocationAction($location, $key)
    {
        $response = '';
        switch ($location) {
            case 'district': $response = $this->getDistricts($key);
                             break;
            case 'upazila':  $response = $this->getUpazillas($key);
                             break;
            case 'union':    $response = $this->getUnions($key);
                             break;
        }

        return json_encode($response);
    }

    public function getDistricts($key)
    {
        $response = '
        <li style="clear: both;"><a class="lianchor" id="d-0" href="javascript:void(0);">ঢাকা</a></li>
        <li style="clear: both;"><a class="lianchor" id="d-1" href="javascript:void(0);">গাজীপুর</a></li>
        <li style="clear: both;"><a class="lianchor" id="d-2" href="javascript:void(0);">ময়মনসিংহ</a></li>
        <li style="clear: both;"><a class="lianchor" id="d-3" href="javascript:void(0);">জামালপুর</a></li>
        <li style="clear: both;"><a class="lianchor" id="d-4" href="javascript:void(0);">শেরপুর</a></li>';

        return $response;
    }

    public function getUpazillas($key)
    {
        $response = '
        <li style="clear: both;"><a class="lianchor" id="u-o" href="javascript:void(0);">ময়মনসিংহ সদর</a></li>
        <li style="clear: both;"><a class="lianchor" id="u-1" href="javascript:void(0);">ফুলপুর</a></li>
        <li style="clear: both;"><a class="lianchor" id="u-2" href="javascript:void(0);">নান্দাইল</a></li>
        <li style="clear: both;"><a class="lianchor" id="u-3" href="javascript:void(0);">গৌরীপুর</a></li>
        <li style="clear: both;"><a class="lianchor" id="u-4" href="javascript:void(0);">হালুয়াঘাট</a></li>';
        return $response;
    }

    public function getUnions($key)
    {
        $response = '
        <li style="clear: both;"><a class="lianchor" id="un-0" href="javascript:void(0);">আকুয়া</a></li>
        <li style="clear: both;"><a class="lianchor" id="un-1" href="javascript:void(0);">বাড়েরা</a></li>';

        return $response;
    }
}