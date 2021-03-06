<div class="container">
	<p class="lead"><?php echo lang("updateprofile"); ?></p>

	<?php if(validation_errors() != NULL ): ?>
    <div class="alert">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php echo validation_errors(); ?>
    </div>
    <?php endif ?>

	<?php echo form_open_multipart('profile_update'); ?>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<div class="fileinput-new thumbnail" style="width:100%;">
							<?php if(file_exists("assets/user_pictures/".$photo)): ?>
									<img class="img-rounded" style="width:100%;" src="<?php echo asset_url("user_pictures/".$photo); ?>">
								<?php else: ?>
									<img class="img-rounded" style="width:100%;" src="<?php echo asset_url("user_pictures/default.jpg"); ?>">
							<?php endif ?>
							</div>
							<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
							<div>
									<small><? echo lang("imageinfo"); ?></small><br>
									<span class="btn btn-primary btn-block btn-file" name="photo">
										<span class="fileinput-new"><span class="fui-image"></span> <?php echo lang("selectimage"); ?></span>
										<span class="fileinput-exists"><span class="fui-gear"></span> <?php echo lang("change"); ?></span>
										<input type="file" name="userfile">
									</span>
									<a href="#" class="btn btn-primary btn-embossed fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span> <?php echo lang("remove"); ?></a>
							</div>
						</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="form-group">
						<label for="username"><?php echo lang("username");?></label>
						<small><?php echo "&nbsp;", lang("validcharacters");?></small>
						<input type="text" class="form-control" id="username" value="<?php echo set_value('username',$user_name); ?>" placeholder="<?php echo lang("username"); ?>" name="username">
				</div>
				<div class="form-group">
	    			<label for="email"><?php echo lang("email"); ?></label>
	    			<input type="text" class="form-control" id="email" placeholder="<?php echo lang("email"); ?>" value="<?php echo set_value('email',$email); ?>"  name="email">
	 			</div>
	 			<div class="form-group">
	    			<label for="cellPhone"><?php echo lang("cellphone"); ?></label>
	    			<input type="text" class="form-control" id="cellPhone" value="<?php echo set_value('cellPhone',$phone_num_1); ?>" placeholder="<?php echo lang("cellphone"); ?>" name="cellPhone">
	 			</div>
	 			<div class="form-group">
	    			<label for="workPhone"><?php echo lang("workphone"); ?></label>
	    			<input type="text" class="form-control" id="workPhone" value="<?php echo set_value('workPhone',$phone_num_2); ?>" placeholder="<?php echo lang("workphone"); ?>" name="workPhone">
	 			</div>
	 			<div class="form-group">
	    			<label for="fax"><?php echo lang("faxnumber"); ?></label>
	    			<input type="text" class="form-control" id="fax" value="<?php echo set_value('fax',$fax_num); ?>" placeholder="<?php echo lang("faxnumber"); ?>" name="fax">
	 			</div>
				<div class="form-group">
						<label for="name"><?php echo lang("name"); ?></label>
						<input type="text" class="form-control" id="name" placeholder="<?php echo lang("name"); ?>" value="<?php echo set_value('name',$name); ?>" name="name">
				</div>
				<div class="form-group">
						<label for="surname"><?php echo lang("surname"); ?></label>
						<input type="text" class="form-control" id="surname" placeholder="<?php echo lang("surname"); ?>" value="<?php echo set_value('surname',$surname); ?>"  name="surname">
				</div>
<!-- 				<div class="form-group">
					<label for="company">Company</label>

					<select title="Choose at least one" class="select-block" id="company" name="company">
						<?php foreach ($companies as $company): ?>
							<option value="<?php echo $company['id']; ?>"><?php echo $company['name']; ?></option>
						<?php endforeach ?>
					</select>

				</div> -->
				<div class="form-group">
						<label for="jobTitle"><?php echo lang("job"); ?></label>
						<input type="text" class="form-control" id="jobTitle" value="<?php echo set_value('jobTitle',$title); ?>" placeholder="<?php echo lang("job"); ?>" name="jobTitle">
				</div>
				<div class="form-group">
						<label for="jobDescription"><?php echo lang("description"); ?></label>
						<textarea class="form-control" rows="3" name="description" id="description" placeholder="<?php echo lang("description"); ?>"><?php echo set_value('description',$description); ?></textarea>
				</div>
				<button type="submit" class="btn btn-inverse col-md-9"><?php echo lang("save"); ?></button>
				<a href="<?php echo base_url('user/'.$user_name); ?>" class="btn btn-warning col-md-2 col-md-offset-1"><?php echo lang("cancel"); ?></a>
			</div>
		</div>
	</form>
</div>