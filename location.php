<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL certificate verification
$result = curl_exec($ch);
$result = json_decode($result);

if ($result->status == 'success') {
    echo "Country: " . $result->country . '<br/>';
    echo "Region: " . $result->regionName . '<br/>';
    echo "City: " . $result->city . '<br/>';
    if (isset($result->lat) && isset($result->lon)) {
        echo "Lat: " . $result->lat . '<br/>';
        echo "Lon: " . $result->lon . '<br/>';
        // Perform reverse geocoding to get the address from the latitude and longitude
        $address = getAddressFromCoordinates($result->lat, $result->lon);
        if ($address) {
            echo "Address: " . $address . '<br/>';
        } else {
            echo "Failed to retrieve address information.<br/>";
        }
    }
    echo "IP: " . $result->query . '<br/>';
} else {
    echo "Failed to retrieve location information.";
}

function getAddressFromCoordinates($latitude, $longitude) {
    $apiKey = "AIzaSyAT5x1BB4C1XYteaejR7LBNw15qMI6HEW"; // Replace with your actual Google Maps API key

    // Initialize cURL session
    $ch = curl_init();

    // Define the URL for the Geocoding API request
    $url = "https://maps.googleapis.com/maps/api/geocode/json?latlng={$latitude},{$longitude}&key={$apiKey}";

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL certificate verification

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for errors
    if ($response === false) {
        echo "Error: " . curl_error($ch);
        return false;
    }

    // Decode JSON response
    $data = json_decode($response);

    // Close cURL session
    curl_close($ch);

    // Check if the response contains results
    if ($data->status == 'OK') {
        // Extract formatted address from the first result
        return $data->results[0]->formatted_address;
    } else {
        return false;
    }
}
?>
