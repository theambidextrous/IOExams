<div class="col-md-9 col-sm-offset-2">
<script type="text/javascript">
function closeExamWindow(){var ww = window.open(window.location, '_self'); ww.close();}
</script>
    <div class="panel panel-default">
        <div class="panel-heading"><center><?=$step?></center></div>
        <div class="panel-body">
            <form action="#" controller="Exams" class="form-horizontal" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <label for="subject_name" class="col-sm-3 control-label"><small>Step Details</small></label>
                    <div class="col-sm-4">
                        <select name="data[Exam][test_instruction]" class="form-control" id="ExamTestInstruction">
                            <option value="Largely Clear">Largely Clear</option>
                            <option value="Medium Clear">Medium Clear</option>
                            <option value="Not Clear">Not Clear</option>
                        </select>		
                    </div>
                </div>
                <div class="form-group">
                    <label for="subject_name" class="col-sm-3 control-label"><small>Step Details</small></label>
                    <div class="col-sm-4">
                        <select name="data[Exam][test_instruction]" class="form-control" id="ExamTestInstruction">
                            <option value="Largely Clear">Largely Clear</option>
                            <option value="Medium Clear">Medium Clear</option>
                            <option value="Not Clear">Not Clear</option>
                        </select>		
                    </div>
                </div>
                <div class="form-group text-left">
                    <div class="col-sm-offset-3 col-sm-7">
                        <button type="submit" class="btn btn-success"><span class="fa fa-plus"></span>Submit</button>
                        <a href="#" onClick="closeExamWindow();" class="btn btn-danger"><span class="fa fa-close"></span>Close</a>
                    </div>
                    </div>
            </form>	
            </div>
            <!-- end body -->
    </div>
    <!-- end panel -->
</div>
<!-- end colmd -->