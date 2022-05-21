<?php
require $_SERVER['DOCUMENT_ROOT'] . '/server/config/db.php';

function censoredEmail($email)
{
    $count = strlen($email) - 12;
    $output = substr_replace($email, str_repeat('*', $count), 2, $count);
    return $output;
}

function discountedPrice($price, $discount)
{
    $discount = $price * $discount;
    $price = $price - $discount;
    return $price;
}

function rupiahFormat($angka)
{
    $hasil_rupiah = "Rp" . number_format($angka, 2, ',', '.');
    $hasil_rupiah = explode(",", $hasil_rupiah);
    $hasil = $hasil_rupiah[0];
    return $hasil;
}

// Functions Akun
function saveProfile($profile, $email)
{
    global $conn;

    $name = $profile['name'];
    $gender = $profile['gender'];
    $ttl = $profile['tanggal'] . " " . $profile['bulan'] . " " . $profile['tahun'];

    // foto acan

    mysqli_query($conn, "UPDATE users SET name = '$name', gender = '$gender', ttl = '$ttl'");
    if (mysqli_affected_rows($conn) > 0) {
        return "Berhasil memperbaharui profil";
    } else {
        return "Gagal memperbaharui profil";
    }
}

function tambahAlamat($datas, $userid) {
    global $conn;

    $name = $datas['name'];
    $nohp = $datas['nohp'];
    $address1 = $datas['address1'];
    $address2 = $datas['address2'];

    mysqli_query($conn, "INSERT INTO address (user_id, name, no, address1, address2) VALUES ('$userid', '$name', '$nohp', '$address1', '$address2')");
    if (mysqli_affected_rows($conn) > 0) {
        return "Berhasil menambahkan alamat";
    } else {
    //    echo mysqli_query($conn,"SHOW ERRORS");
    echo mysqli_error($conn);
    }
}

function ubahAlamat($datas, $id) {
    global $conn;

    $name = $datas['name'];
    $nohp = $datas['nohp'];
    $address1 = $datas['address1'];
    $address2 = $datas['address2'];
    $id = $datas['id'];

    mysqli_query($conn, "UPDATE addresses SET name = '$name', nohp = '$nohp', address1 = '$address1', address2 = '$address2' WHERE id = '$id'");
    if (mysqli_affected_rows($conn) > 0) {
        return "Berhasil mengubah alamat";
    } else {
        return "Gagal mengubah alamat";
    }
}

function updatePassword($datas, $email) {
    global $conn;

    if($datas['sandi1']) {
        $oldPassword = mysqli_fetch_assoc(mysqli_query($conn, "SELECT password FROM users WHERE email = '$email'"));
        if(password_verify($datas['sandi1'], $oldPassword['password'])) {
            if($datas['sandi2'] == $datas['sandi3']) {
                $password = password_hash($datas['sandi2'], PASSWORD_DEFAULT);
                mysqli_query($conn, "UPDATE users SET password = '$password' WHERE email = '$email'");
                if (mysqli_affected_rows($conn) > 0) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }else {
        if ($datas['sandi2'] == $datas['sandi3']) {
            $password = password_hash($datas['sandi2'], PASSWORD_DEFAULT);
            mysqli_query($conn, "UPDATE users SET password = '$password' WHERE email = '$email'");
            if (mysqli_affected_rows($conn) > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

// Functions Carts
function showCart($userid) {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM cart WHERE id_user = '$userid'");
    while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    foreach($data as $row) {
        $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id = '$row[id_product]'"));
        $row['product'] = $product;
        $output[] = $row;
    }
    return $output;
}

function addToCart($userid, $productid) {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM carts WHERE id_user = '$userid' AND id_product = '$productid'");
    if(mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $qty = $row['total'] + 1;
        mysqli_query($conn, "UPDATE cart SET total = '$qty' WHERE id_user = '$userid' AND id_product = '$productid'");
    } else {
        mysqli_query($conn, "INSERT INTO cart (id_user, id_product, qty) VALUES ('$userid', '$productid', '1')");
    }
    if (mysqli_affected_rows($conn) > 0) {
        return "Berhasil menambahkan ke keranjang";
    } else {
        return "Gagal menambahkan ke keranjang";
    }
}

function deleteFromCart($userid, $productid) {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM carts WHERE id_user = '$userid' AND id_product = '$productid'");
    if(mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $qty = $row['total'] - 1;
        if($qty > 0) {
            mysqli_query($conn, "UPDATE cart SET total = '$qty' WHERE id_user = '$userid' AND id_product = '$productid'");
        } else {
            mysqli_query($conn, "DELETE FROM cart WHERE id_user = '$userid' AND id_product = '$productid'");
        }
    }
    if (mysqli_affected_rows($conn) > 0) {
        return "Berhasil menghapus dari keranjang";
    } else {
        return "Gagal menghapus dari keranjang";
    }
}

// Functions Products
function flashSaleProducts() {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM events WHERE flashsale = '1'");
    while($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
    foreach($data as $row) {
        $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id = '$row[id]'"));
        $discount = $row['discount'];
        $newArray = $product;
        $newArray['discount'] = $discount;
        $output[] = $newArray;
    }
    return $output;
}

function hotProducts() {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM products SORT BY sold DESC LIMIT 6");
    while($row = mysqli_fetch_assoc($query)) {
        $output[] = $row;
    }
    
    return $output;
}

function newestProducts() {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM products ORDER BY id DESC LIMIT 6");
    while($row = mysqli_fetch_assoc($query)) {
        $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM variants WHERE id = '$row[id]'"));
        $data = $row;
        $data['retail_price'] = $row['retail_price'];
        $data['wholesaler_price_1'] = $row['wholesaler_price_1'];
        $data['wholesaler_price_2'] = $row['wholesaler_price_2'];
        $data['wholesaler_price_3'] = $row['wholesaler_price_3'];
        $data['photos'] = $row['photo'];
        $output[] = $data;
    }

    return $output;
}

function terlarisProducts() {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM products ORDER BY sold DESC LIMIT 6");
    while($row = mysqli_fetch_assoc($query)) {
        $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM variants WHERE id = '$row[id]'"));
        $data = $row;
        $data['retail_price'] = $row['retail_price'];
        $data['wholesaler_price_1'] = $row['wholesaler_price_1'];
        $data['wholesaler_price_2'] = $row['wholesaler_price_2'];
        $data['wholesaler_price_3'] = $row['wholesaler_price_3'];
        $data['photos'] = $row['photo'];
        $output[] = $data;
    }

    return $output;
}

function cheapestProducts() {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM products ORDER BY price ASC LIMIT 6");
    while($row = mysqli_fetch_assoc($query)) {
        $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM variants WHERE id = '$row[id]'"));
        $data = $row;
        $data['retail_price'] = $row['retail_price'];
        $data['wholesaler_price_1'] = $row['wholesaler_price_1'];
        $data['wholesaler_price_2'] = $row['wholesaler_price_2'];
        $data['wholesaler_price_3'] = $row['wholesaler_price_3'];
        $data['photos'] = $row['photo'];
        $output[] = $data;
    }

    return $output;
}

function mostExpensiveProducts() {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM products ORDER BY price DESC LIMIT 6");
    while($row = mysqli_fetch_assoc($query)) {
        $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM variants WHERE id = '$row[id]'"));
        $data = $row;
        $data['retail_price'] = $row['retail_price'];
        $data['wholesaler_price_1'] = $row['wholesaler_price_1'];
        $data['wholesaler_price_2'] = $row['wholesaler_price_2'];
        $data['wholesaler_price_3'] = $row['wholesaler_price_3'];
        $data['photos'] = $row['photo'];
        $output[] = $data;
    }

    return $output;
}

function getProduct($id) {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
    while($row = mysqli_fetch_assoc($query)){
        $row2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM variants WHERE id_product = '$id'"));
        $output = $row;
        $output['retail_price'] = $row2['retail_price'];
        $output['wholesaler_price_1'] = $row2['wholesaler_price_1'];
        $output['wholesaler_price_2'] = $row2['wholesaler_price_2'];
        $output['wholesaler_price_3'] = $row2['wholesaler_price_3'];
        $output['photos'] = $row2['photo'];
    }
    return $output;
}

function getAllProducts() {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM variants");
    while($row = mysqli_fetch_assoc($query)) {
        $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id = '$row[id_product]'"));
        $arr = $product;
        $arr['retail_price'] = $row['retail_price'];
        $arr['wholesaler_price_1'] = $row['wholesaler_price_1'];
        $arr['wholesaler_price_2'] = $row['wholesaler_price_2'];
        $arr['wholesaler_price_3'] = $row['wholesaler_price_3'];
        $arr['photos'] = $row['photo'];
        $output[] = $arr;
    }

    return $output;
}

function relatedProducts($id, $category) {
    global $conn;

    $query = mysqli_query($conn, "SELECT * FROM products WHERE id != '$id' && category = '$category' ORDER BY RAND() LIMIT 4");
    while($row = mysqli_fetch_assoc($query)) {
        $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM variants WHERE id = '$row[id]'"));
        $data = $row;
        $data['retail_price'] = $row['retail_price'];
        $data['wholesaler_price_1'] = $row['wholesaler_price_1'];
        $data['wholesaler_price_2'] = $row['wholesaler_price_2'];
        $data['wholesaler_price_3'] = $row['wholesaler_price_3'];
        $data['photos'] = $row['photo'];
        $output[] = $data;
    }

    return $output;
}

function filteredProducts($category = "all", $minPrice = 0, $maxPrice = 1) {
    global $conn;

    if($category == "all") {
        $query1 = mysqli_query($conn, "SELECT id FROM products");
    } else {
        $query1 = mysqli_query($conn, "SELECT id FROM products WHERE category = '$category'");
    }
    while($row = mysqli_fetch_assoc($query1)) {
        $filteredByCategory['id'] = $row;
    }

    if($minPrice == 0 && $maxPrice == 1) {
        $query2 = mysqli_query($conn, "SELECT id_product FROM variants");
    } elseif ($minPrice != 0 && $maxPrice == 1) {
        $query2 = mysqli_query($conn, "SELECT id_product FROM variants WHERE retail_price >= '$minPrice'");
    } elseif ($minPrice == 0 && $maxPrice != 1) {
        $query2 = mysqli_query($conn, "SELECT id_product FROM variants WHERE retail_price <= '$maxPrice'");
    } else {
        $query2 = mysqli_query($conn, "SELECT id_product FROM variants WHERE retail_price >= '$minPrice' && retail_price <= '$maxPrice'");
    }
    while($row = mysqli_fetch_assoc($query2)) {
        $filteredByPrice['id'] = $row;
    }
    
    // hijikeun 2 array
    $filteredIds = array_intersect($filteredByCategory, $filteredByPrice);
    foreach($filteredIds as $id => $value) {
        $query3 = mysqli_query($conn, "SELECT * FROM products WHERE id = '$value'");
        while($row = mysqli_fetch_assoc($query3)) {
            $product = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM variants WHERE id = '$row[id]'"));
            $data = $row;
            $data['retail_price'] = $row['retail_price'];
            $data['wholesaler_price_1'] = $row['wholesaler_price_1'];
            $data['wholesaler_price_2'] = $row['wholesaler_price_2'];
            $data['wholesaler_price_3'] = $row['wholesaler_price_3'];
            $data['photos'] = $row['photo'];
            $output[] = $data;
        }
    }
    
    return $output;
}

function regisSubs($datas){
    global $conn;

   $whatsapp = $datas['no'];
   $instagram = $datas['ig'];
   $pakage = $datas['paket'];
   $amount = $datas['harga'];
   $id_user = $datas['userid'];
   $reference = "JS".rand("00000", "99999");

    $query = mysqli_query($conn, "INSERT INTO subscription_orders (whatsapp, instagram, pakage, amount, id_user, reference,'status') VALUES ('$whatsapp', '$instagram', '$pakage', '$amount', '$id_user','$reference','0')");
    if($query) {
        $output = array(
            'status' => 'success',
            'message' => 'Berhasil melakukan pemesanan'
        );
        echo json_encode($output);
    } else {
        echo mysqli_error($conn);
    }

}

function paySubs($datas){
    global $conn;
    $apiKey       = 'DEV-heCBMFfj5YYsMUNYnRi5r92iDmKt8ICV9YGT5GIu';
    $privateKey   = 'zQkTv-92qdZ-xahco-hFuNu-56SgR';
    $merchantCode = 'T8782';

    $reference = $datas['reference'];
    $payment = $datas['payment'];
    $nama = $_SESSION['name'];

    $subsData = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM subscription_orders WHERE reference = '$reference'"));

    $data = [
        'method'         => $payment,
        'merchant_ref'   => $reference,
        'amount'         => $subsData['amount'],
        'customer_name'  => $nama,
        'customer_email' => 'bryandharmawan75@gmail.com',
        'customer_phone' => '081535272063',
        'order_items'    => [
            [
                'sku'         => $subsData['pakage'],
                'name'        => $subsData['pakage'],
                'price'       => $subsData['amount'],
                'quantity'    => 1,
            ]
        ],
        'return_url'   => 'https://legacy.egdev.co/server/finish.php',
        'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
        'signature'    => hash_hmac('sha256', $merchantCode.$reference.$subsData['amount'], $privateKey)
    ];

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_FRESH_CONNECT  => true,
        CURLOPT_URL            => "https://tripay.co.id/api-sandbox/transaction/create",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_FAILONERROR    => false,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query($data)
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);
    $datas = json_decode($response, true);

    curl_close($curl);

    $third_ref = $datas['data']['reference'];
    
    if($error){
        echo $error;
    }else{
        $update = mysqli_query($conn, "UPDATE subscription_orders SET third_ref = '$third_ref', method = '$payment' WHERE reference = '$reference'");
        echo $response;
    }

}

function getDetailTripay($ref){
    $payload = ['reference'	=> $ref];
    $apiKey       = 'DEV-heCBMFfj5YYsMUNYnRi5r92iDmKt8ICV9YGT5GIu';

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_FRESH_CONNECT  => true,
        CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/detail?'.http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_FAILONERROR    => false,
        CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
    ]);

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);
    return $response;
}

?>