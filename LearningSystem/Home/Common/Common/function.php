<?php
  function getpage(&$m,$where,$pagesize=10){
    $m1=clone $m;//ǳ����һ��ģ��
    $count = $m->where($where)->count();//���߲�������join�Ȳ�����������
    $m=$m1;//Ϊ������Ϊ�������߲�����ǳ����һ��ģ��
    $p=new Think\Page($count,$pagesize);
    $p->lastSuffix=false;
    $p->setConfig('header','<li class="rows">��<b>%TOTAL_ROW%</b>����¼&nbsp;&nbsp;ÿҳ<b>%LIST_ROW%</b>��&nbsp;&nbsp;��<b>%NOW_PAGE%</b>ҳ/��<b>%TOTAL_PAGE%</b>ҳ</li>');
    $p->setConfig('prev','��һҳ');
    $p->setConfig('next','��һҳ');
    $p->setConfig('last','ĩҳ');
    $p->setConfig('first','��ҳ');
    $p->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

    $p->parameter=I('get.');

    $m->limit($p->firstRow,$p->listRows);

    return $p;
}