<div class="navbar">
      <img src="">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="transfermoney.php">Transfer Money</a></li>
        <li><a href="transactionhistory.php">Transaction History</a></li>
      </ul>
    </div>
    <style>
      .navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  .logo{
    width: 120px;
    cursor: pointer;
  }
  .navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
  }
  .navbar ul li a{
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
  }
  .navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #009688;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.5s;
  }
  .navbar ul li:hover::after{
    width: 100%;

  }
    </style>