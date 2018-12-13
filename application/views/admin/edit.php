                <div class="row">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-header">
                                Edit Petugas
                            </div>
                            <?php
                            $names = explode(' ', $petugas->name); //memecah string
                            $firstname = $names[0];
                            $lastname  = array_slice($names, 1);
                            $lastname  = implode(' ', $lastname); // menggabung string
                            ?>
                            <div class="card-body">
                                <form action="<?php echo site_url('admin/update')?>" class="needs-validation was-validate" method="post">
                                    <div class="row">
                                    	<input type="hidden" name="id" value="<?php echo $petugas->id?>">
                                        <div class="col-md-6 form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" name="firstname" id="firstName" class="form-control" value="<?php echo $firstname?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="firstname">Last Name</label>
                                            <input type="text" name="lastname" id="lastName" class="form-control" value="<?php echo $lastname?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" name="username" value="<?php echo $petugas->username?>">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="new_password">New Password (Optional)</label>
                                        <input type="password" class="form-control" name="new_password" placeholder="New Password"required>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="nohp">Nomor Handphone</label>
                                        <input type="number" class="form-control" name="nohp" value="<?php echo $petugas->phone?>">
                                    </div>
                                    <div class="mb-4 form-group">
                                        <label for="description">Alamat</label>
                                        <textarea name="alamat" rows="3" class="form-control"><?php echo $petugas->address?></textarea>
                                    </div>
                                    <hr class="mb-4">
                                    <button class="btn btn-primary mb-3" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>