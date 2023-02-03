<div>
    <div wire:ignore.self class="modal fade bd-example-modal-lg" id="daftarModal" tabindex="-1" role="dialog" aria-labelledby="daftarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="daftarModalLabel">Registrasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/daftar" method="POST">
                        @csrf
                        <div>
                            <label for="no_identitas">Nomor KTP <sup>*</sup></label>
                            <input type="text" id="no_identitas" name="no_identitas" class="form-control @error('no_identitas') is-invalid @enderror" placeholder="Nomor KTP" required>
                            @error('no_identitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div>
                            <label for="nama">Nama <sup>*</sup></label>
                            <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" required>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div>
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                            <option>Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
            
                        <div>
                            <label for="tgl_lahir">Tanggal Lahir <sup>*</sup></label>
                            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" placeholder="Tanggal Lahir" required>
                            @error('tgl_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div>
                        <label for="alamat">Alamat</label>
                        <textarea id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat"></textarea>
                        @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
            
                        <div>
                            <label for="no_telp">No Telephone</label>
                            <input type="no_telp" id="no_telp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" placeholder="No Telephone">
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div>
                            <label for="username">Username <sup>*</sup></label>
                            <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required>
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div>
                            <label for="password">Password <sup>*</sup></label>
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <br><br>
                        <div align="right">
                        <!-- <a href  >Registrasi</a> -->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
