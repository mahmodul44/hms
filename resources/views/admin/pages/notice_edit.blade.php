@include ('admin.layouts.header')
@include ('admin.layouts.sidebar')

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Update Notice Board</h2>
               <div class="block copyblock">

                  <form action="" method="post">
                    <table class="form">
                        <tr>
                            <td>
                                <input type="text" name="nboard" value="" class="medium" />
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
