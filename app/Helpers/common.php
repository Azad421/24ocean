<?php
function showStatus($status)
{
    switch ($status->nickname) {
        case 'active':
            echo '<span class="badge bg-primary px-2">' . $status->name . '</span>';
            break;
        case 'inactive':
            echo '<span class="badge bg-danger px-2">' . $status->name . '</span>';
            break;
        case 'pending':
            echo '<span class="badge bg-warning px-2">' . $status->name . '</span>';
            break;
        case 'approved':
            echo '<span class="badge bg-success px-2">' . $status->name . '</span>';
            break;
        case 'rejected':
            echo '<span class="badge bg-danger px-2">' . $status->name . '</span>';
            break;
        case 'processing':
            echo '<span class="badge bg-success px-2">' . $status->name . '</span>';
            break;
        case 'created':
            echo '<span class="badge bg-primary px-2">' . $status->name . '</span>';
            break;
        case 'completed':
            echo '<span class="badge bg-success px-2">' . $status->name . '</span>';
            break;
        case 'deactivated':
            echo '<span class="badge bg-warning px-2">' . $status->name . '</span>';
            break;
        case 'delivered':
            echo '<span class="badge bg-primary px-2">' . $status->name . '</span>';
            break;
        case 'canceled':
            echo '<span class="badge bg-danger px-2">' . $status->name . '</span>';
            break;
        case 'on-the-way':
            echo '<span class="badge bg-success px-2">' . $status->name . '</span>';
            break;
        default:
            echo '<span class="badge bg-warning px-2">No status found</span>';
    }
}

function status($status)
{
    echo '<span class="badge badge-success px-2">' . $status . '</span>';

}
function showStars($rating)
{
    $unrated = 5-$rating;
    for($i = 0; $i < $rating; $i++){
        echo '<i class="fas fa-star"></i>';
    }
    for($i = 0; $i < $unrated; $i++){
        echo '<i class="far fa-star"></i>';
    }
}

function price($price){
    echo "INR ".$price;
}
