<!DOCTYPE html>
<html>
<head>
	<title>Controle2</title>
        <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>JQUERY/jquery-3.1.1.min.js"></script>
        <script type="text/javascript">
        $
        (
            function()
            {
                
                $('#btnCreer').click(Creer);
                $('#btnVoter').click(Voter);
            }
        );
    </script>
</head>


    </form>
    <input type="button" value="Créer une conférence" id="btnVoter">
    <br>
    <input type="button" value="Voter pour une conférence" id="btnVoter">
    <br>
    <div id="divCreer"></div>
    <br>
    <div id="divVoter"></div>
</body>

</html>