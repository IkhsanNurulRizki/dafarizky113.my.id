<table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include_once('controller/user.php');
                                            $no = 1;
                                            $userObj = new User();
                                            $result = $userObj->viewUser();

                                            while($row = $result->fetch_array()){
                                                ?>
                              
                                                <tr>
                                                    <td><?php echo $no++ ?></td>
                                                    <td><?php echo $row['Username'] ?></td>
                                                    <td><?php echo $row['Email'] ?></td>
                                                    <td><?php echo $row['Password'] ?></td>
                                                    <td class="text-center">
                                                      <button class="btn btn-sm btn-primary" data-toggle="modal">EDIT</button>
                                                      <button class="btn btn-sm btn-danger" data-toggle="modal">HAPUS</button>
                                                    </td>
                                                </tr>
                              
                                              <?php } ?>                                        
                                    </tbody>   
</table>