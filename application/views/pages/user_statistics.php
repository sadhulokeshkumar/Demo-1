<?php $this->load->view('templates/header'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
.cards{
		margin-bottom:20px;
	}
	.card{
		padding: 10px;
		margin-top:10px;
		box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
		border-radius: 10px !important;
        width:250px;
        height:150px;
	}
	.card-title{
		color: #fff;
		font-weight: bold;
		font-family: 'Source Sans Pro', 'Segoe UI', 'Droid Sans', Tahoma, Arial, sans-serif;
        text-align:center;        
	}
	.card.journals-stats{
		background-color: #2dbcf1;
		cursor: pointer;
	}
	.card.conferences-stats{
		background-color:#1ebfae;
		cursor: pointer;
	}
	.card.seminars-stats{
		background-color:#f18455;
        cursor: pointer;
	}
	.card.workshop-stats{
		background-color:#f5c417;
	}
	.card-text{
		text-align: center;
		color: #fff;
		font-weight: bold;
		font-size: 5rem;
		padding: 15px;
		font-family: sans-serif, "Times New Roman";
	}
    
</style>

  <div class="cards">
      <div class="container">
<div class="row">
    <div class="col-sm-6 col-md-3 col-xs-12" width="10px;">
        <div class="card journals-stats" >
            <div class="card-block">
                <h4 class="card-title" >JOURNALS</h4>
                <div class="card-text">0</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 col-xs-12">
        <div class="card conferences-stats" >
            <div class="card-block">
                <h4 class="card-title" >CONFERENCES</h4>
                <div class="card-text">0</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 col-xs-12">
        <div class="card seminars-stats" >
            <div class="card-block">
                <h4 class="card-title">SEMINARS</h4>
                <div class="card-text">0</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 col-xs-12">
        <div class="card workshop-stats" >
            <div class="card-block">
                <h4 class="card-title">WORKSHOPS</h4>
                <div class="card-text">0</div>
            </div>
        </div>
    </div>
</div>
</div>
</div>