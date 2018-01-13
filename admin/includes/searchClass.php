<?php

class Search
{
	private $db;
	
	function __construct($conn)
	{
		$this->db = $conn;
	}
	
	public function searchResult($query,$search)
			{
				$stmt = $this->db->prepare($query);
				$stmt->execute();
			
				if($stmt->rowCount()>0)
				{
					while($row=$stmt->fetch(PDO::FETCH_ASSOC))
					{
                    $date = date_create($row['date_uploaded']);
                    $id = $row['content_id'];
                    $countDownload = Admin::countDownload($this->db, $id);
					$countLink = Admin::countLike($this->db, $id);
					$ext = Admin::getExtName($row['file']);



						?>


		<div class="content"  data-postid="<?php echo $row['content_id'] ?>">							
        <h3><?php echo $row['title'] ?></h3>
        <div id="inline" class="inline">
         <b style="color:blue">File type:<?php echo $ext ?></b>
        <b id="date">Uploaded <?php echo date_format($date, 'jS F Y') ?></b>
        <a href="admin/<?php echo $row['file'] ?>" download="StatiSense<?php  echo $row['file'] ?>" class="btn btn-success" onclick="fetch_model(<?php echo $id ?>)">Download</a>
        <a id="no-link">Downloaded <?php echo $countDownload;  ?> times</a>
        <a class="btn btn-primary bbb"  onclick="amen(<?php echo $id ?>);"><i class="fa fa-thumbs-up">Like</i> </a> 
         <span class="pop"></span>
        <a id="no-link" class="like">Already has <?php echo $countLink;  ?> likes</a>
        <a id="no-link" class="like1" style="display:none"> Already has <?php echo ++$countLink;  ?> likes</a>
        
        
      </div>
      <p><?php echo $row['description'] ?></p>

      </div>
       
						
						<?php
					}

				}
				else
				{
			$stmt = $this->db->prepare("INSERT INTO no_result(search_query) VALUES (:c)");

	 		//bind params
			$stmt->bindParam(":c", $search);
			$stmt->execute();

					?>
					<tr>
					<td>No search result for "<?php echo  $search ?>" </td>
					</tr>
					<?php
				}
				
			}






	
	public function paging($query,$products_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$products_per_page;
		}
		$query2=$query." limit $starting_position,$products_per_page";
		return $query2;
	}
	
	public function paginglink($query,$products_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_products = $stmt->rowCount();
		
		if($total_no_of_products > 0)

		{
			
			$total_no_of_pages=ceil($total_no_of_products/$products_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<a href='".$self."?page_no=1'>First</a>&nbsp;&nbsp;";
				echo "<a href='".$self."?page_no=".$previous."'>Previous</a>&nbsp;&nbsp;";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<strong><a href='".$self."?page_no=".$i."' style='color:red;text-decoration:none'>".$i."</a></strong>&nbsp;&nbsp;";
				}
				else
				{
					echo "<a href='".$self."?page_no=".$i."'>".$i."</a>&nbsp;&nbsp;";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<a href='".$self."?page_no=".$next."'>Next</a>&nbsp;&nbsp;";
				echo "<a href='".$self."?page_no=".$total_no_of_pages."'>Last</a>&nbsp;&nbsp;";
			}

		}
	}
}