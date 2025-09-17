<body>
  <!-- Sidebar -->
  <div class="sidebar d-flex flex-column p-3">
    <h4 class="text-white">Accountix</h4>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
  <li><a href="/" class="nav-link<?= urlis('/Index') ? ' active' : '' ?>">Dashboard</a></li>
  <li><a href="/Transactions" class="nav-link<?= urlis('/Transactions') ? ' active' : '' ?>">Transactions</a></li>
  <li><a href="/Revenue" class="nav-link<?= urlis('/Revenue') ? ' active' : '' ?>">Revenue</a></li>
  <li><a href="/Expenses" class="nav-link<?= urlis('/Expenses') ? ' active' : '' ?>">Expenses</a></li>
  <li><a href="/Inventory" class="nav-link<?= urlis('/Inventory') ? ' active' : '' ?>">Inventory</a></li>
  <li><a href="/Accounts" class="nav-link<?= urlis('/Accounts') ? ' active' : '' ?>">Accounts</a></li>
  <li><a href="/Setting" class="nav-link<?= urlis('/Setting') ? ' active' : '' ?>">Settings</a></li>
    </ul>
    <hr>
    <a href="/logout" class="btn btn-outline-light w-100">Logout</a>
  </div>


