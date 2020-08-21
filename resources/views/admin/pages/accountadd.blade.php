@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')
        <div class="grid_10">
            <div style="height: 800px" class="box round first grid">
               <h2><a href="/accountlist"><span style="border-bottom: 2px solid black">All Account</span></a></h2>
                <h2 style="text-align: center;">Add Account</h2>
               <div class="block copyblock">
               	<form action="" method="post">
                    <table class="form">
                        <tr>
                    <td>
                        <label>Account Name*</label>
                    </td>
                    <td>

                        <input type="text" name="name" placeholder="enter account name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Type*</label>
                    </td>
                    <td>
                        <select id="blood" name="type">
                            <option>Select Option</option>
                            <option value="1">Debit</option>
                            <option value="0">Credit</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="body" ></textarea>
                    </td>
                </tr>
                 <tr>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>

		</table>
	</form>
</div>

       </div>
            </div>


  @include ('admin.layouts.footer')
