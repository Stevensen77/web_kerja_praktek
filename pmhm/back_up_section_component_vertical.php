<section class="ftco-section ftc-no-pb ftc-no-pt tiga" style="background-color:#e9e4e9;height:350px;margin-top:-20px">
			<div class="container">
			<div class="row">
			
			
			<a href="#">
			<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='stair_pillar'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="width:450px;height:320px;margin-top:30px">	
			</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5" style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	
		            <h2 class="mb-4" style="margin-top:-78px;margin-left:-45px">Stair Pillar</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="margin-top:-60px">PT. Puncak Menara Hijau Mas has been serving wood industries both in Indonesia and overseas since 1997. 
							We prioritize to meet our customers need and specification. 
							We process rubberwood, mainly, and small amount of mixed wood from traceable and legal resources in Lampung province 
							in accordance to applicable forest management certification (SVLK).
							Our sawn timber division turns sawn timber into S4S, profile, dowel, finger jointed laminating board/block and component.
							We also have veneering division which manufactures veneer and multiplex plywood for construction and furniture sectors.
							<a href="" >(Read more)</a>
							</p>
							
							
							
							
							<!-- <a href="about.php" class="pixel-btn">More<span class="icon-long-arrow-right">  </span></a> -->
			
				</div>
			</div>
			</div>
			</div>
			</section>


<!-- ================================================================================================================================================ -->		


			<section class="ftco-section ftc-no-pb ftc-no-pt tiga" style="background-color:#e9e4e9;height:350px;margin-top:-20px">
			<div class="container">
			<div class="row">
				
			<a href="#">
			<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='component'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="width:450px;height:320px;margin-top:30px">	
			</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5" style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	
		            <h2 class="mb-4" style="margin-top:-78px;margin-left:-45px">Wooden Part</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="margin-top:-60px">PT. Puncak Menara Hijau Mas has been serving wood industries both in Indonesia and overseas since 1997. 
							We prioritize to meet our customers need and specification. 
							We process rubberwood, mainly, and small amount of mixed wood from traceable and legal resources in Lampung province 
							in accordance to applicable forest management certification (SVLK).
							Our sawn timber division turns sawn timber into S4S, profile, dowel, finger jointed laminating board/block and component.
							We also have veneering division which manufactures veneer and multiplex plywood for construction and furniture sectors.
							<a href="" >(Read more)</a>
							</p>
							
							
							
							
							<!-- <a href="about.php" class="pixel-btn">More<span class="icon-long-arrow-right">  </span></a> -->
			
				</div>
			</div>
			</div>
			</div>
			</section>