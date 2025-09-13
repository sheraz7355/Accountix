<body>
  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column p-3">
    <h4 class="text-white">Accountix</h4>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
  <li><a href="/Dashboard" class="nav-link<?= urlis('/Dashboard') ? ' active' : '' ?>"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
  <li><a href="/Transactions" class="nav-link<?= urlis('/Transactions') ? ' active' : '' ?>"><i class="bi bi-arrow-left-right me-2"></i>Transactions</a></li>
  <li><a href="/Revenue" class="nav-link<?= urlis('/Revenue') ? ' active' : '' ?>"><i class="bi bi-graph-up-arrow me-2"></i>Revenue</a></li>
  <li><a href="/Expenses" class="nav-link<?= urlis('/Expenses') ? ' active' : '' ?>"><i class="bi bi-cash-coin me-2"></i>Expenses</a></li>
  <li><a href="/Inventory" class="nav-link<?= urlis('/Inventory') ? ' active' : '' ?>"><i class="bi bi-box-seam me-2"></i>Inventory</a></li>
  <li><a href="/Accounts" class="nav-link<?= urlis('/Accounts') ? ' active' : '' ?>"><i class="bi bi-people me-2"></i>Accounts</a></li>
  <li><a href="/Setting" class="nav-link<?= urlis('/Setting') ? ' active' : '' ?>"><i class="bi bi-gear me-2"></i>Settings</a></li>
    </ul>
    <hr>
    <a href="/" class="btn btn-outline-light w-100">Logout</a>
  </div>


