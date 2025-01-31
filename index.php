
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza kita</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
<script>var menuData = <?php echo json_encode($menuList); ?>;</script>
    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar start -->
    <nav class="navbar" x-data>
        <a href="#" class="navbar-logo">Pizza<span>Kita</span></a>
        

        <div class="navbar-nav">
            
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#products">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button" style="color: rgb(0, 0, 0);"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart-button" style="color: rgb(0, 0, 0);"><i data-feather="shopping-cart"></i>
        <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity" ></span></a>
            <a href="#" id="hamburger-menu" style="color: rgb(0, 0, 0);"><i data-feather="menu"></i></a>
        </div>

        <!-- Search Form start -->
        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box"><i data-feather="search"></i></label>
        </div>
        <!-- Search Form end -->

        <!-- Shopping Cart start -->
        <div class="shopping-cart">
            <template x-for="(item, index) in $store.cart.items" x-keys="index">
                
                <div class="cart-item">
                <img :src="'img/menu/' + item.Gambar" alt="Product 1">
                <div class="item-detail"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" @click.prevent="$store.cart.trash(item.Id)" id="trash">
<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
<path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
</svg>
                    <h3 x-text="item.Menu"></h3> 
                <div class="item-price"><span x-text="rupiah(item.Harga)"></span>
                &times;
            <button id="remove" @click="$store.cart.remove(item.Id)">&minus;</button>
        <span class="quantity" x-text="item.quantity"></span>
    <button id="add" @click="$store.cart.add(item)">&plus;</button>&equals;
<span x-text="rupiah(item.total)"></span>

</div>
</div>
               
</div></template>
            <h4 x-show="!$store.cart.items.length">KERANJANG KOSONG</h4>
            <h4 x-show="$store.cart.items.length">Total : <span x-text="rupiah($store.cart.total)"></span></h4>

            <div class="form-container" x-show="$store.cart.items.length">
                <form action="" id="checkoutForm">
                    <input type="hidden" name="items" x-model="JSON.stringify($store.cart.items)">
                    <input type="hidden"name="total" x-model="$store.cart.total">
                    <h5>Customer Detail</h5>
                    <label for="name">
                        <span >Name</span>
                        <input type="text" name="name" id="name" style="margin-left:8px;">
                    </label>
                    <label for="email">
                        <span>Email</span>
                        <input type="text" name="email" id="email" style="margin-left:10px;">
                    </label>
                    <label for="telepon">
                        <span>Telepon</span>
                        <input type="text" name="telepon" id="telepon">
                    </label>
                    <button type="submit" class="checkout-button disabled" id="checout-button" value="checkout">CheckOut</button>
                </form>
            </div>
            
            
        </div>
        <!-- Shopping Cart end -->

    </nav>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <div class="mask-container">
            <main class="content">
                <h1>Mari Nikmati Sekotak <span>Pizza</span></h1>
                
            </main>
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/menu/faizan-saeed-mwYTNZO0WhA-unsplash.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa memilih kopi kami?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ducimus voluptatum dolor. Et, voluptatum accusantium!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic deserunt iure amet facilis eos a quo cum voluptates molestias nihil.</p>
            </div>
        </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu" x-data="products">
        <h2><span>Menu</span> Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, repellendus numquam quam tempora voluptatum.
        </p>

        <div class="row" x-data="products">
        <template x-for="(item, index) in items" :key="index">
            <div class="menu-card">
                <img :src="'img/menu/' + item.Gambar" class="menu-card-img">
                <h3 class="menu-card-title" x-text="item.Menu"></h3>
                <p class="menu-card-price" x-text="rupiah(item.Harga)"></p>
                <a @click="$store.cart.add(item)" class="menu-card-price" style="margin-top: 1rem;
                    display: inline-block;
                    padding: 0.5rem 0.5rem;
                    font-size: 1rem;
                    color: #fff;
                    background-color: red;
                    cursor: pointer;
                    ">Beli Sekarang</a>
            </div>
        </template>
    </div>

          
    </section>
    <!-- Menu Section end -->

    <!-- Products Section start -->
    <section class="products" id="products">
        <h2><span>Produk Unggulan</span> Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo unde eum, ab fuga possimus iste.</p>

        <div class="row ">
            <div class="product-card ">
                <div class="product-icons ">
                    <a href="#" style="color: black;"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button" style="color: black;"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/products/1.jpg " alt="Product 1 ">
                </div>
                <div class="product-content ">
                    <h3>Coffee Beans 1</h3>
                    <div class="product-stars">
                        <i data-feather="star" class="star-full "></i>
                        <i data-feather="star" class="star-full "></i>
                        <i data-feather="star" class="star-full "></i>
                        <i data-feather="star" class="star-full "></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>
            <div class="product-card ">
                <div class="product-icons ">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye "></i></a>
                </div>
                <div class="product-image ">
                    <img src="img/products/1.jpg" alt="Product 1 ">
                </div>
                <div class="product-content">
                    <h3>Coffee Beans 1</h3>
                    <div class="product-stars ">
                        <i data-feather="star "></i>
                        <i data-feather="star "></i>
                        <i data-feather="star "></i>
                        <i data-feather="star "></i>
                        <i data-feather="star "></i>
                    </div>
                    <div class="product-price ">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>
            <div class="product-card ">
                <div class="product-icons ">
                    <a href="#"><i data-feather="shopping-cart"></i></a>
                    <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
                </div>
                <div class="product-image">
                    <img src="img/products/1.jpg " alt="Product 1 ">
                </div>
                <div class="product-content">
                    <h3>Coffee Beans 1</h3>
                    <div class="product-stars">
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                    <div class="product-price">IDR 30K <span>IDR 55K</span></div>
                </div>
            </div>  <!-- Elemen untuk Alpine.js -->
      
    </section>
    <!-- Products Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, provident.
        </p>

        <div class="row ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56347862248!2d107.57311709235512!3d-6.903444341687889!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1672408575523!5m2!1sen!2sid "
                allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade " class="map "></iframe>

            <form action=" ">
                <div class="input-group ">
                    <i data-feather="user "></i>
                    <input type="text " placeholder="nama ">
                </div>
                <div class="input-group ">
                    <i data-feather="mail "></i>
                    <input type="text " placeholder="email ">
                </div>
                <div class="input-group ">
                    <i data-feather="phone "></i>
                    <input type="text " placeholder="no hp ">
                </div>
                <button type="submit " class="btn ">kirim pesan</button>
            </form>

        </div>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
        <div class="socials ">
            <a href="# "><i data-feather="instagram "></i></a>
            <a href="# "><i data-feather="twitter "></i></a>
            <a href="# "><i data-feather="facebook "></i></a>
        </div>

        <div class="links ">
            <a href="#home ">Home</a>
            <a href="#about ">Tentang Kami</a>
            <a href="#menu ">Menu</a>
            <a href="#contact ">Kontak</a>
        </div>

        <div class="credit ">
            <p>Created by <a href=" ">ivanchristian</a>. | &copy; 2024.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Modal Box Item Detail start -->
    <div class="modal " id="item-detail-modal ">
        <div class="modal-container ">
            <a href="#" class="close-icon"><i data-feather="x"></i></a>
            <div class="modal-content ">
                <img src="img/products/1.jpg " alt="Product 1 ">
                <div class="product-content ">
                    <h3>Product 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
                    <div class="product-stars ">
                        <i data-feather="star " class="star-full "></i>
                        <i data-feather="star " class="star-full "></i>
                        <i data-feather="star " class="star-full "></i>
                        <i data-feather="star " class="star-full "></i>
                        <i data-feather="star "></i>
                    </div>
                    <div class="product-price ">IDR 30K <span>IDR 55K</span></div>
                    <a href="# "><i data-feather="shopping-cart "></i> <span>add to cart</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box Item Detail end -->
    <script>
    function showPrice(button) {
        // Mendapatkan nilai harga dari atribut data
        var price = button.getAttribute('data-price');

        // Menampilkan pesan alert dengan harga
        alert('Harga: ' + price);
    }
</script>
    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <!-- My Javascript -->
    <script src="js/app.js" ></script>
    <script src="js/script.js "></script>
</body>

</html>