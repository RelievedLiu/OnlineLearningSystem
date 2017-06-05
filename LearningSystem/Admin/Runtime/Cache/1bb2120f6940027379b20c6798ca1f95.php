<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html><html><head><title><?php echo ($id); ?></title><script type="text/javascript" src="/LearningSystem/Public/js/pdfobject.min.js"></script><style type="text/css">        .pdfobject-container { height: 650px;}
        .pdfobject { border: 1px solid #666; }
    </style></head><body><div id="example1"></div><script type="text/javascript">    PDFObject.embed("/LearningSystem/Public/upload/message/<?php echo ($id); ?>.pdf", "#example1");
</script></body></html>