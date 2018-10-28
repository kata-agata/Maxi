<?php

namespace App\Http\Controllers;

use GeneaLabs\LaravelMaps\Facades\Map;

class ChartersMapController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
//    public function index() {
//        $config = array();
//        $config['map_height'] = '550px';
//        $config['zoom'] = 'auto';
//        $config['draggableCursor'] = 'default';
//        Map::initialize($config);
//        app()
//                ->make('\App\Http\Controllers\ChartersMapController')
//                ->callAction('markers_multiple', $parameters = array());
//        Map::initialize($config);
//        $map = Map::create_map();
//        return view('charters')->with('map', $map);
//    }

    public function show($map) {
        //set up default configs
        $config = array();
        $config['map_height'] = '550px';
        $config['zoom'] = 'auto';
        $config['draggableCursor'] = 'default';
       // $config['center'] = '37.4419, -122.1419';
        Map::initialize($config);
        //call feature configs and setup markers, etc
        app()
                ->make('\App\Http\Controllers\ChartersMapController')
                ->callAction($map, $parameters = array());
        //create map, send to view
        $map = Map::create_map();
        return view('charters')->with('map', $map);
    }

    public function markers_single() {
        $config['zoom'] = '13';
        Map::initialize($config);
        $marker = array();
        $marker['position'] = '37.4419, -122.1419';
        Map::add_marker($marker);
    }

    public function markers_multiple() {
        $marker = array();
        $marker['position'] = '36.279188, 28.698070';
        $marker['infowindow_content'] = 'Turkey';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        $marker['animation'] = 'DROP';
        Map::add_marker($marker);
        $marker = array();
        $marker['position'] = '36.532334, 23.719342';
        $marker['infowindow_content'] = 'Grecce';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|9999FF|000000';
        $marker['animation'] = 'DROP';
        Map::add_marker($marker);
        $marker = array();
        $marker['position'] = '42.114706, 18.820977';
        $marker['infowindow_content'] = 'Montenegro';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=C|9999FF|000000';
        $marker['animation'] = 'DROP';
        Map::add_marker($marker);
        $marker = array();
        $marker['position'] = '-0.525262, 73.709461';
        $marker['infowindow_content'] = 'Malediwy';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=C|9999FF|000000';
        $marker['animation'] = 'DROP';
        Map::add_marker($marker);
        $marker = array();
        $marker['position'] = '15.710495, -73.831641';
        $marker['infowindow_content'] = 'Karaiby';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=C|9999FF|000000';
        $marker['animation'] = 'DROP';
        Map::add_marker($marker);
    }

    public function polyline() {
        $polyline = array();
        $polyline['points'] = array('37.429, -122.1319',
            '37.429, -122.1419',
            '37.4419, -122.1219');
        Map::add_polyline($polyline);
    }

        public function turkey() {
        $polyline = array();
        $polyline['points'] = array('36.659035, 28.307890',
            '36.101552, 29.011955',
            '36.059632, 29.707624',
            '36.128223, 30.631938',
            '36.656718, 30.919631');
        Map::add_polyline($polyline);
    }
    
    public function polygon() {
        $polygon = array();
        $polygon['points'] = array('36.505164, 28.217118',
            '36.243969, 28.624879',
            '36.268963, 29.163335',
            '36.739287, 28.482980');
        $polygon['strokeColor'] = '#000099';
        $polygon['fillColor'] = '#000099';
        Map::add_polygon($polygon);
    }

    public function drawing() {
        $config['drawing'] = true;
        $config['drawingDefaultMode'] = 'circle';
        $config['drawingModes'] = array('circle', 'rectangle', 'polygon');
        Map::initialize($config);
    }

    public function directions() {
        $config['directions'] = TRUE;
        $config['directionsStart'] = 'empire state building';
        $config['directionsEnd'] = 'statue of liberty';
        $config['directionsDivID'] = 'directionsDiv';
        Map::initialize($config);
    }

    public function streetview() {
        $config['map_type'] = 'STREET';
        $config['streetViewPovHeading'] = 90;
        Map::initialize($config);
    }

    public function clustering() {
        $config['center'] = '37.409, -122.1319';
        $config['zoom'] = '13';
        $config['cluster'] = TRUE;
        $config['clusterStyles'] = array(
            array(
                "url" => "https://raw.githubusercontent.com/googlemaps/js-marker-clusterer/gh-pages/images/m1.png",
                "width" => "53",
                "height" => "53"
        ));
        Map::initialize($config);
        $marker = array();
        $marker['position'] = '37.409, -122.1319';
        Map::add_marker($marker);
        $marker = array();
        $marker['position'] = '37.409, -122.1419';
        Map::add_marker($marker);
        $marker = array();
        $marker['position'] = '37.409, -122.1219';
        Map::add_marker($marker);
        $marker = array();
        $marker['position'] = '37.409, -122.1519';
        Map::add_marker($marker);
    }

    public function kml_layer() {
        $config['onclick'] = 'alert(\'You just clicked at: \' + event.latLng.lat() + \', \' + event.latLng.lng());';
        $config['kmlLayerURL'] = 'https://www.google.com/maps/d/kml?mid=zQsfa8t0PJbc.kXZmQVidOFfE';
        Map::initialize($config);
    }

    //context menu
    public function right_click() {
        // set to false to remove from menu
        $contextMenuItems['centerMap'] = true;
        $contextMenuItems['addMarker'] = true;
        //TODO build array for design features of menu
        Map::add_context_menu($contextMenuItems);
    }

}
