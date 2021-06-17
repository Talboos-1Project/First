<section id="second-section" style="">
  <!-- <div class="container p-3 my-3 bg-dark"> -->
  <div class="container-fluid p-5">
    <ul class="nav nav-tabs pb-3 border-0">
      <li class="nav-item">
          <a href="#" onclick="changeCollection('Kids')" class="nav-link category-tag active shoes-tabs" data-toggle="tab" style="color: #D8B88F;background-color: inherit;">Kids</a>
      </li>
      <li class="nav-item">
          <a href="#" onclick="changeCollection('Women')" class="nav-link category-tag shoes-tabs" data-toggle="tab" style="color: #D8B88F;background-color: inherit;">Women</a>
      </li>
      <li class="nav-item">
          <a href="#" onclick="changeCollection('Men')" class="nav-link category-tag shoes-tabs" data-toggle="tab" style="color: #D8B88F;background-color: inherit;">Men</a>
      </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="Kids-Collection">
          <div class="card-deck">
            <div class="card">
              <img src="../images/Child_shoes_1.webp" class="card-img-top" alt="Kid1">
              <div class="card-body">
                <h5 class="card-title">RS-Fast Sneaker</h5>
                <p class="card-text">74,95 €</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="../images/Child_shoes_2.webp" class="card-img-top" alt="Kid2">
              <div class="card-body">
                <h5 class="card-title">RS-Fast Sneaker</h5>
                <p class="card-text">74,95 €</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="../images/Child_shoes_3.webp" class="card-img-top" alt="Kid3">
              <div class="card-body">
                <h5 class="card-title">RS-Fast Sneaker</h5>
                <p class="card-text">74,95 €</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="p-2 text-right">
            <a href="shopping/shopping.php" class="btn mt-4 to-shop-button" style="">To Shop</a>
          </div>
        </div>
        <div class="tab-pane fade show" id="Women-Collection">
          <div class="card-deck">
            <div class="card">
              <img src="../images/Captain.jpg" class="card-img-top" alt="Kid1">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="../images/Captain.jpg" class="card-img-top" alt="Kid2">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="../images/Captain.jpg" class="card-img-top" alt="Kid3">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="p-2 text-right">
            <a href="shopping/shopping.php" class="btn to-shop-button" style="">To Shop</a>
          </div>
        </div>
        <div class="tab-pane fade show" id="Men-Collection">
          <div class="card-deck">
            <div class="card">
              <img src="../images/Captain.jpg" class="card-img-top" alt="Kid1">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="../images/Captain.jpg" class="card-img-top" alt="Kid2">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img src="../images/Captain.jpg" class="card-img-top" alt="Kid3">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="p-2 text-right">
            <a href="shopping/shopping.php" class="btn to-shop-button" style="">To Shop</a>
          </div>
        </div>
    </div>
  </div>
</section>
<script>
    function changeCollection(collectionName)
    {
      switch (collectionName) {
        case 'Kids' :
          document.getElementById('Women-Collection').classList.remove("active");
          document.getElementById('Men-Collection').classList.remove("active");
          document.getElementById('Kids-Collection').classList.add("active");
          break;
        case 'Men':
          document.getElementById('Kids-Collection').classList.remove("active");
          document.getElementById('Women-Collection').classList.remove("active");
          document.getElementById('Men-Collection').classList.add("active");
          break;
        case 'Women':
          document.getElementById('Kids-Collection').classList.remove("active");
          document.getElementById('Men-Collection').classList.remove("active");
          document.getElementById('Women-Collection').classList.add("active");
          break;
        default:
          alert("Kids");
          document.getElementById('Kids-Collection').classList.add("active");
          document.getElementById('Women-Collection').classList.remove("active");
          document.getElementById('Men-Collection').classList.remove("active");
      }
    }
</script>
