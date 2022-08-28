<?php
include '../db.php';

$i = 0;

$sql = "SELECT * from walk_events";

$run_query = mysqli_query($db, $sql);

if (mysqli_num_rows($run_query) > 0) {
    while ($row1 = mysqli_fetch_assoc($run_query)) {

        $i++;

      //make a proper time format $row1['start_time']
        $start_time = date("h:i a", strtotime($row1['start_time']));
        $end_time = date("h:i a", strtotime($row1['end_time']));

        echo '<tr id="trck' . $row1['id'] . '">
                                       <td>
											' . $row1['walk_event_name'] . '
										</td>
                                        <td>
                                        ' . $row1['date'] . '
                                        </td>
                                        <td><div class="badge bg-primary text-white rounded-pill">' . $start_time . '</div></td>
                                        <td><div class="badge bg-primary text-white rounded-pill">' . $end_time . '</div></td>
                                        <td><div class="badge bg-dark text-white rounded-pill">' . $row1['meeting_point'] . '</div></td>
                                        <td><div class="badge bg-primary text-white rounded-pill">' . $row1['distance'] . 'KM</div></td>
                                        <td><div class="badge bg-secondary text-white rounded-pill">' . $row1['leader_name'] . '</div></td>
                                        <td><div class="badge bg-info text-white rounded-pill">' . $row1['status'] . '</div></td>
                                        <td>' . $row1['comments'] . '</td>
                                        <td>
                                        <a href="editWalkEvent.php?id=' . $row1['id'] . '" class="btn btn-datatable btn-icon btn-transparent-dark me-2"title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                                        <a onclick="deleteWalkEvent(' . $row1['id'] . ')"  href="#" class="btn btn-datatable btn-icon btn-transparent-dark" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                                       </td>

                                    </tr>';
    }
}

?>
<script>


</script>