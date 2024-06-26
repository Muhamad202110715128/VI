<div class="col-lg-6">
    <link rel="stylesheet" href="css/styles.css">
    <div class="dasboard text-start">
      <h4>{{ $slot }}</h4>
      <p>{{ $slot }} Overview</p>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-input">
      <div class="input-box d-flex">
        <button class="search btn bg-white" type="submit"><i data-feather="search"></i></button>
        <input class="form-control me-2" type="search" placeholder="Cari Disini..." aria-label="Search">
        <div class="btn-group">
          <button type="button" class="btn bg-white dropdown-toggle" data-bs-toggle="dropdown">
            <i data-feather="bell"></i>
          </button>
          <ul class="dropdown-menu">
            <li>
              <div class="notif d-flex align-items-center justify-content-between">
                <a href=""><p class="m-0">Pembayaran Paket Gold Anda Telah Berhasil Berhasil</p></a>
                <button type="button" class="btn-close" aria-label="Close"></button>
              </div>
            </li>
            <li>
              <div class="notif d-flex align-items-center justify-content-between">
                <a href=""><p class="m-0">Pembayaran Paket Gold Anda Gagal, Mohon untuk lebih teliti dalam melakukan pembayaran</p></a>
                <button type="button" class="btn-close" aria-label="Close"></button>
              </div>
            </li>
            <li>
              <div class="notif d-flex align-items-center justify-content-between">
                <a href=""><p class="m-0">Undangan sedang dalam proses. Mohon tunggu</p></a>
                <button type="button" class="btn-close" aria-label="Close"></button>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>