<?php require "views/partials/header.php" ;
require "views/partials/Main.php" ; ?>
<link rel="stylesheet" href="/css/dashboard.css">
<div class="content">
    <div class="topbar">
      <h1 class="page-title fs-3">Dashboard</h1>
    </div>
<div class="dashboard-data">
      <!-- /////////////////////////////////////////////////////////////////////////////// 1st 4 boxes here! -->
      <div class="box4-container">
        <div class="d1-box">
          <div class="head">
            Total Revenue
            <i class="bi bi-currency-dollar"></i></i>
          </div>
          <div class="detail">
            <h4>$565,000</h4>
            <p><i class="bi bi-graph-up-arrow"></i> +12% from last month</p>
          </div>
        </div>

        <div class="d1-box">
          <div class="head">
            Total Expenses
            <i class="bi bi-graph-down-arrow"></i>
          </div>
          <div class="detail">
            <h4>$300,000</h4>
            <p> +3% from last month</p>
          </div>
        </div>

        <div class="d1-box">
          <div class="head">
            Net profit
            <i class="bi bi-graph-up-arrow"></i>
          </div>
          <div class="detail">
            <h4>$265,000</h4>
            <p><i class="bi bi-graph-up-arrow"></i> +18% from last month</p>
          </div>
        </div>

        <div class="d1-box">
          <div class="head">
            Active Clients
            <i class="bi bi-people"></i>
          </div>
          <div class="detail">
            <h4>24</h4>
            <p>+2 from last month</p>
          </div>
        </div>
      </div>

      <!-- /////////////////////////////////////////////////////////////////////////////// 2 graph boxes here -->
      <div class="graphboxes">
        <div class="d2-box">
          <div class="head">
            Revenue vs Expenses
          </div>
        </div>

        <div class="d2-box">
          <div class="head">
            Expense Breakdown
          </div>
        </div>
      </div>
<?php
require "views/partials/footer.php" ?>