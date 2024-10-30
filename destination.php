<?php
// Retrieve the location from the URL
$location = isset($_GET['location']) ? strtolower($_GET['location']) : 'default';

// Define content for each destination
$destinations = [
    'danang' => [
        'title' => 'Đà Nẵng',
        'description' => 'Đà Nẵng is a coastal city known for its sandy beaches and modern bridges.',
        'image' => 'link_to_danang_image.jpg'
    ],
    'hoian' => [
        'title' => 'Hội An',
        'description' => 'Hội An is famous for its well-preserved Ancient Town, lantern-lit streets, and historical architecture.',
        'image' => 'link_to_hoian_image.jpg'
    ],
    // Add more destinations as needed
];

// Check if the location exists in the destinations array
$data = isset($destinations[$location]) ? $destinations[$location] : null;

// If location data exists, display it
if ($data) {
    echo "<h1>{$data['title']}</h1>";
    echo "<p>{$data['description']}</p>";
    echo "<img src='{$data['image']}' alt='{$data['title']}'>";
} else {
    echo "<h1>Destination Not Found</h1>";
    echo "<p>The location you are looking for does not exist.</p>";
}
?>
