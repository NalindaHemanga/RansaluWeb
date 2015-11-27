<?php
$this->load->view('vwHeader');
?>

<link href="<?php echo HTTP_CSS_PATH; ?>starter-template.css" rel="stylesheet">
<link href="<?php echo HTTP_CSS_PATH; ?>bootstrap.min.css" rel="stylesheet">

<div>
    <div style="height: 60px; width: 100%; float: left; background-color: #ffffff" ></div>
    <h2 align="center" ">Quotation Generator</h2>
    <hr>
    <form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>quotation/register_quote">
        <div class="form-group">
            <label class="control-label col-sm-4" for="name">Name:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Email:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Telephone:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="text" name="telephone" placeholder="Enter Telephone" pattern="[0-9]{10}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="nic">NIC No:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nic" name="nic" placeholder="Enter NIC No" pattern="[0-9]{9}[v|x|V|X]" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="date">Date:</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-4" for="s_time">Start Time:</label>
            <div class="col-sm-4">
                <input type="time" class="form-control" id="s_time" name="s_time"  required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="e_time">End Time:</label>
            <div class="col-sm-4">
                <input type="time" class="form-control" id="e_time" name="e_time"  required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="guest">No. of guests:</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="text" name="guest" placeholder="Enter no. of guests" pattern="[0-9]{3}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="hall">Venue:</label>
            <div class="col-sm-4">
                <select class="form-control" id="hall">
                    <option value="1">Diamond Room</option>
                    <option value="2">Ivy Room</option>
                    <option value="3">Nightshade Room</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="menu">Type of Menu:</label>
            <div class="col-sm-4">
                <select class="form-control" id="menu">
                    <option value="1">Full Day</option>
                    <option value="2">Half Day</option>
                    <option value="3">Cocktails</option>
                    <option value="4">Snacks</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="description">Description:</label>
            <div class="col-sm-4">
                <textarea id="description" name="description" class="form-control custom-control" rows="6" style="resize:none"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
                <button type="submit" class="btn btn-default" >Submit</button>
            </div>
        </div>
    </form>
</div>
<?php
$this->load->view('vwFooter');
?>