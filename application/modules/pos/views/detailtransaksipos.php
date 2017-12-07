<?php 
// print_r($detail);
// print_r($detailproduk);
 ?>

   <div class="content">
   	<div class="container-fluid">
   		<div class="row">
   			<div class="content-header">
   				<h1>
   					Detail Transaksi
   					<a href="#" class="btn btn-success btn-fill pull-right">Fitur Premium
   					</a>
   				</h1>
   				<div class="divider-blue">
   				</div>
   				<ol class="breadcrumb">
   					<li class="<?php echo site_url('pos') ?>">
   						<a href="active">
   							My POS
   						</a>
   					</li>
   					<li> 
   						<?php echo $detail['SalesId']; ?>
   					</li> 
   				</ol>
   			</div>
   		</div>
   		<div class="card">
   			<div class="header p-0">  
   				<div class="row"> 
   					<div class="col-md-6">
   						<p class="category font-16 m-t-10 color-black">INV <?php echo $detail['SalesId']; ?>
   						</p>
   					</div> 
   				</div>
   			</div>
   			<div class="content table-responsive table-full-width">
   				<table class="table">
   					<tr> 
   						<td width="90" class="vertical-top p-t-10">
   							<div class="cart-product-imitation">
   								<img class="avatar-produk border-gray" src="<?php echo @$detailproduk['ProductsImage'][0]['path']; ?>" style="max-width: 100%;border:0;" alt="...">
   							</div>
   						</td>
   						<td class="desc vertical-top">
   							<small style="font-size: 65%;">
                           -
                           <!-- Elektronik - Smartphone -->
                        </small>
   							<h4 class="title font-bold font-16"><?php echo $detailproduk['product_name']; ?>
   							</h4>
   							<p class="category font-12">SKU <?php echo $detailproduk['id']; ?>
   							</p> 
   						</td>
   						<td class="vertical-top p-t-10">
   							<dl class="dl-horizontal"> 
   								<dt class="font-12 font-bold" style="width: 80px;">
   									Deskripsi:
   								</dt> 
   								<dd class="font-12 font-thin color-grey-light">
   									<?php echo $detailproduk['product_desc']; ?>
   								</dd> 
   								    
   							</dl>
   						</td>
   						<td class="vertical-top p-t-10 text-right">
   							<p class="font-12 m-t-10 font-bold">
   								<?php echo $qty =  $detail['Quantity']; ?> x IDR <?php echo $hargaaktual = $detail['ActualPrice'];?>
   							</p>
   						</td>
   					</tr>
   					<tr> 
   						<td colspan="3" width="90" class="vertical-top p-t-10">
   							<p class="color-grey">
   								SUBTOTAL
   							</p>
   						</td> 
   						<td class="vertical-top p-t-10 text-right">
   							<p class="font-12 m-t-10 font-bold">IDR <?php echo $subtot = $qty * $hargaaktual; ?>
   							</p>
   						</td>
   					</tr>
   					<tr> 
   						<td colspan="3" width="90" class="vertical-top p-t-10">
   							<p class="color-grey">
   								PPN <?php echo $pajak = $detail['TaxPercentage']?>%
   							</p>
   						</td> 
   						<td class="vertical-top p-t-10 text-right">
   							<p class="font-12 m-t-10 font-bold">IDR <?php echo $hargapajakin = ($subtot * $pajak) / 100 ?>
   							</p>
   						</td>
   					</tr>
   					<tr> 
   						<td colspan="3" width="90" class="vertical-top p-t-10">
   							<p class="color-grey">
   								TOTAL
   							</p>
   						</td> 
   						<td class="vertical-top p-t-10 text-right">
   							<p class="font-16 m-t-10 font-bold">IDR <?php echo $total = $subtot+$hargapajakin; ?>
   							</p>
   						</td>
   					</tr>
   				</table>
   			</div>
   		</div>
   	</div>
   </div>
</div>
</div> 
</body>
