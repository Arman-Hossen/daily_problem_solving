<?php

$data = [
    [
        'start_date' => '01-03-2024',
        'end_date' => '19-03-2024',
    ]
];

// Get the current date
$currentDate = new DateTime();
$currentDateString = $currentDate->format('d-m-Y');

?>

<?php foreach ($data as $item): ?>
    <?php 
        // Convert start and end dates to DateTime objects
        $startDate = DateTime::createFromFormat('d-m-Y', $item['start_date']);
        $endDate = DateTime::createFromFormat('d-m-Y', $item['end_date']);

        // Format the current date to match the format in $data
        $currentDateFormatted = DateTime::createFromFormat('d-m-Y', $currentDateString);

        // Check if the current date is equal to either the start date or the end date,
        // or if it falls within the range of start and end dates
        if (($currentDateFormatted == $startDate || $currentDateFormatted == $endDate) || ($currentDateFormatted >= $startDate && $currentDateFormatted <= $endDate)): ?>
            <p>True</p>
        <?php else: ?>
            <p>False</p> 
        <?php endif; ?>
<?php endforeach; ?>
