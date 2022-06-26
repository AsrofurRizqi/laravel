<table id="tabeldata" class="table table-striped text-center" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Merek</th>
            <th>Nomor Seri</th>
            <th>Tahun Dibuat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="tabelisi">

    @include('ajax')
    </tbody>
</table>
<div class="row">
<div class="col-md-10 pagination-container" >
	<nav>
		<ul class="pagination">
            <li data-page="prev" >
				<span> < <span class="sr-only">(current)</span></span>
			</li>
				   <!--	Here the JS Function Will Add the Rows -->
        <li data-page="next" id="prev">
				<span> > <span class="sr-only">(current)</span></span>
			</li>
		</ul>
	</nav>
</div>
<div class="col-md-2">
    <select class  ="form-control" name="state" id="maxRows">
						 <option value="5000">Show ALL Rows</option>
						 <option value="5">5</option>
						 <option value="10">10</option>
						 <option value="15">15</option>
						 <option value="20">20</option>
						 <option value="50">50</option>
						 <option value="70">70</option>
						 <option value="100">100</option>
	</select>
</div>
