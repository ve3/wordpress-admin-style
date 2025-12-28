<h2><?php _e( 'Pagination', 'WpAdminStyle' ); ?></h2>

<div class="tablenav">
	<div class="tablenav-pages">
		<span class="displaying-num"><?php _e( 'Example markup for <em>n</em> items', 'WpAdminStyle' ); ?></span> 
		<span class="pagination-links">
			<span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">&laquo;</span>
			<span class="tablenav-pages-navspan button disabled" aria-hidden="true">&lsaquo;</span>
			<span class="paging-input">
				<label for="current-page-selector" class="screen-reader-text">Current Page</label>
				<input id="current-page-selector" class="current-page" type="text" name="paged" value="1" size="1" aria-describedby="table-paging" />
				<span class="tablenav-paging-text"> of <span class="total-pages">5</span></span>
			</span>
			<a class="next-page button" href="#"><span class="screen-reader-text">Next page</span><span aria-hidden="true">&rsaquo;</span></a>
			<a class="last-page button" href="#"><span class="screen-reader-text">Last page</span><span aria-hidden="true">&raquo;</span></a>
		</span>
	</div>
</div>
