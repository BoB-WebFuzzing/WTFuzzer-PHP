--TEST--
bcmul() function
--EXTENSIONS--
bcmath
--INI--
bcmath.scale=0
--FILE--
<?php
require(__DIR__ . "/run_bcmath_tests_function.inc");

$firstFactors = ["15", "-15", "1", "-9", "14.14", "-16.60", "0.15", "-0.01"];
$secondFactors = array_merge($firstFactors, [
    "0",
    "0.00",
    "-0",
    "-0.00",
    "15151324141414.412312232141241",
    "-132132245132134.1515123765412",
    "141241241241241248267654747412",
    "-149143276547656984948124912",
    "0.1322135476547459213732911312",
    "-0.123912932193769965476541321",
]);

run_bcmath_tests($firstFactors, $secondFactors, "*", bcmul(...));

?>
--EXPECT--
Number "15" (scale 0)
15 * 15                             = 225
15 * -15                            = -225
15 * 1                              = 15
15 * -9                             = -135
15 * 14.14                          = 212
15 * -16.60                         = -249
15 * 0.15                           = 2
15 * -0.01                          = 0
15 * 0                              = 0
15 * 0.00                           = 0
15 * -0                             = 0
15 * -0.00                          = 0
15 * 15151324141414.412312232141241 = 227269862121216
15 * -132132245132134.1515123765412 = -1981983676982012
15 * 141241241241241248267654747412 = 2118618618618618724014821211180
15 * -149143276547656984948124912   = -2237149148214854774221873680
15 * 0.1322135476547459213732911312 = 1
15 * -0.123912932193769965476541321 = -1

Number "-15" (scale 0)
-15 * 15                             = -225
-15 * -15                            = 225
-15 * 1                              = -15
-15 * -9                             = 135
-15 * 14.14                          = -212
-15 * -16.60                         = 249
-15 * 0.15                           = -2
-15 * -0.01                          = 0
-15 * 0                              = 0
-15 * 0.00                           = 0
-15 * -0                             = 0
-15 * -0.00                          = 0
-15 * 15151324141414.412312232141241 = -227269862121216
-15 * -132132245132134.1515123765412 = 1981983676982012
-15 * 141241241241241248267654747412 = -2118618618618618724014821211180
-15 * -149143276547656984948124912   = 2237149148214854774221873680
-15 * 0.1322135476547459213732911312 = -1
-15 * -0.123912932193769965476541321 = 1

Number "1" (scale 0)
1 * 15                             = 15
1 * -15                            = -15
1 * 1                              = 1
1 * -9                             = -9
1 * 14.14                          = 14
1 * -16.60                         = -16
1 * 0.15                           = 0
1 * -0.01                          = 0
1 * 0                              = 0
1 * 0.00                           = 0
1 * -0                             = 0
1 * -0.00                          = 0
1 * 15151324141414.412312232141241 = 15151324141414
1 * -132132245132134.1515123765412 = -132132245132134
1 * 141241241241241248267654747412 = 141241241241241248267654747412
1 * -149143276547656984948124912   = -149143276547656984948124912
1 * 0.1322135476547459213732911312 = 0
1 * -0.123912932193769965476541321 = 0

Number "-9" (scale 0)
-9 * 15                             = -135
-9 * -15                            = 135
-9 * 1                              = -9
-9 * -9                             = 81
-9 * 14.14                          = -127
-9 * -16.60                         = 149
-9 * 0.15                           = -1
-9 * -0.01                          = 0
-9 * 0                              = 0
-9 * 0.00                           = 0
-9 * -0                             = 0
-9 * -0.00                          = 0
-9 * 15151324141414.412312232141241 = -136361917272729
-9 * -132132245132134.1515123765412 = 1189190206189207
-9 * 141241241241241248267654747412 = -1271171171171171234408892726708
-9 * -149143276547656984948124912   = 1342289488928912864533124208
-9 * 0.1322135476547459213732911312 = -1
-9 * -0.123912932193769965476541321 = 1

Number "14.14" (scale 0)
14.14 * 15                             = 212
14.14 * -15                            = -212
14.14 * 1                              = 14
14.14 * -9                             = -127
14.14 * 14.14                          = 199
14.14 * -16.60                         = -234
14.14 * 0.15                           = 2
14.14 * -0.01                          = 0
14.14 * 0                              = 0
14.14 * 0.00                           = 0
14.14 * -0                             = 0
14.14 * -0.00                          = 0
14.14 * 15151324141414.412312232141241 = 214239723359599
14.14 * -132132245132134.1515123765412 = -1868349946168376
14.14 * 141241241241241248267654747412 = 1997151151151151250504638128405
14.14 * -149143276547656984948124912   = -2108885930383869767166486255
14.14 * 0.1322135476547459213732911312 = 1
14.14 * -0.123912932193769965476541321 = -1

Number "-16.60" (scale 0)
-16.60 * 15                             = -249
-16.60 * -15                            = 249
-16.60 * 1                              = -16
-16.60 * -9                             = 149
-16.60 * 14.14                          = -234
-16.60 * -16.60                         = 275
-16.60 * 0.15                           = -2
-16.60 * -0.01                          = 0
-16.60 * 0                              = 0
-16.60 * 0.00                           = 0
-16.60 * -0                             = 0
-16.60 * -0.00                          = 0
-16.60 * 15151324141414.412312232141241 = -251511980747479
-16.60 * -132132245132134.1515123765412 = 2193395269193426
-16.60 * 141241241241241248267654747412 = -2344604604604604721243068807039
-16.60 * -149143276547656984948124912   = 2475778390691105950138873539
-16.60 * 0.1322135476547459213732911312 = -2
-16.60 * -0.123912932193769965476541321 = 2

Number "0.15" (scale 0)
0.15 * 15                             = 2
0.15 * -15                            = -2
0.15 * 1                              = 0
0.15 * -9                             = -1
0.15 * 14.14                          = 2
0.15 * -16.60                         = -2
0.15 * 0.15                           = 0
0.15 * -0.01                          = 0
0.15 * 0                              = 0
0.15 * 0.00                           = 0
0.15 * -0                             = 0
0.15 * -0.00                          = 0
0.15 * 15151324141414.412312232141241 = 2272698621212
0.15 * -132132245132134.1515123765412 = -19819836769820
0.15 * 141241241241241248267654747412 = 21186186186186187240148212111
0.15 * -149143276547656984948124912   = -22371491482148547742218736
0.15 * 0.1322135476547459213732911312 = 0
0.15 * -0.123912932193769965476541321 = 0

Number "-0.01" (scale 0)
-0.01 * 15                             = 0
-0.01 * -15                            = 0
-0.01 * 1                              = 0
-0.01 * -9                             = 0
-0.01 * 14.14                          = 0
-0.01 * -16.60                         = 0
-0.01 * 0.15                           = 0
-0.01 * -0.01                          = 0
-0.01 * 0                              = 0
-0.01 * 0.00                           = 0
-0.01 * -0                             = 0
-0.01 * -0.00                          = 0
-0.01 * 15151324141414.412312232141241 = -151513241414
-0.01 * -132132245132134.1515123765412 = 1321322451321
-0.01 * 141241241241241248267654747412 = -1412412412412412482676547474
-0.01 * -149143276547656984948124912   = 1491432765476569849481249
-0.01 * 0.1322135476547459213732911312 = 0
-0.01 * -0.123912932193769965476541321 = 0

Number "15" (scale 10)
15 * 15                             = 225.0000000000
15 * -15                            = -225.0000000000
15 * 1                              = 15.0000000000
15 * -9                             = -135.0000000000
15 * 14.14                          = 212.1000000000
15 * -16.60                         = -249.0000000000
15 * 0.15                           = 2.2500000000
15 * -0.01                          = -0.1500000000
15 * 0                              = 0.0000000000
15 * 0.00                           = 0.0000000000
15 * -0                             = 0.0000000000
15 * -0.00                          = 0.0000000000
15 * 15151324141414.412312232141241 = 227269862121216.1846834821
15 * -132132245132134.1515123765412 = -1981983676982012.2726856481
15 * 141241241241241248267654747412 = 2118618618618618724014821211180.0000000000
15 * -149143276547656984948124912   = -2237149148214854774221873680.0000000000
15 * 0.1322135476547459213732911312 = 1.9832032148
15 * -0.123912932193769965476541321 = -1.8586939829

Number "-15" (scale 10)
-15 * 15                             = -225.0000000000
-15 * -15                            = 225.0000000000
-15 * 1                              = -15.0000000000
-15 * -9                             = 135.0000000000
-15 * 14.14                          = -212.1000000000
-15 * -16.60                         = 249.0000000000
-15 * 0.15                           = -2.2500000000
-15 * -0.01                          = 0.1500000000
-15 * 0                              = 0.0000000000
-15 * 0.00                           = 0.0000000000
-15 * -0                             = 0.0000000000
-15 * -0.00                          = 0.0000000000
-15 * 15151324141414.412312232141241 = -227269862121216.1846834821
-15 * -132132245132134.1515123765412 = 1981983676982012.2726856481
-15 * 141241241241241248267654747412 = -2118618618618618724014821211180.0000000000
-15 * -149143276547656984948124912   = 2237149148214854774221873680.0000000000
-15 * 0.1322135476547459213732911312 = -1.9832032148
-15 * -0.123912932193769965476541321 = 1.8586939829

Number "1" (scale 10)
1 * 15                             = 15.0000000000
1 * -15                            = -15.0000000000
1 * 1                              = 1.0000000000
1 * -9                             = -9.0000000000
1 * 14.14                          = 14.1400000000
1 * -16.60                         = -16.6000000000
1 * 0.15                           = 0.1500000000
1 * -0.01                          = -0.0100000000
1 * 0                              = 0.0000000000
1 * 0.00                           = 0.0000000000
1 * -0                             = 0.0000000000
1 * -0.00                          = 0.0000000000
1 * 15151324141414.412312232141241 = 15151324141414.4123122321
1 * -132132245132134.1515123765412 = -132132245132134.1515123765
1 * 141241241241241248267654747412 = 141241241241241248267654747412.0000000000
1 * -149143276547656984948124912   = -149143276547656984948124912.0000000000
1 * 0.1322135476547459213732911312 = 0.1322135476
1 * -0.123912932193769965476541321 = -0.1239129321

Number "-9" (scale 10)
-9 * 15                             = -135.0000000000
-9 * -15                            = 135.0000000000
-9 * 1                              = -9.0000000000
-9 * -9                             = 81.0000000000
-9 * 14.14                          = -127.2600000000
-9 * -16.60                         = 149.4000000000
-9 * 0.15                           = -1.3500000000
-9 * -0.01                          = 0.0900000000
-9 * 0                              = 0.0000000000
-9 * 0.00                           = 0.0000000000
-9 * -0                             = 0.0000000000
-9 * -0.00                          = 0.0000000000
-9 * 15151324141414.412312232141241 = -136361917272729.7108100892
-9 * -132132245132134.1515123765412 = 1189190206189207.3636113888
-9 * 141241241241241248267654747412 = -1271171171171171234408892726708.0000000000
-9 * -149143276547656984948124912   = 1342289488928912864533124208.0000000000
-9 * 0.1322135476547459213732911312 = -1.1899219288
-9 * -0.123912932193769965476541321 = 1.1152163897

Number "14.14" (scale 10)
14.14 * 15                             = 212.1000000000
14.14 * -15                            = -212.1000000000
14.14 * 1                              = 14.1400000000
14.14 * -9                             = -127.2600000000
14.14 * 14.14                          = 199.9396000000
14.14 * -16.60                         = -234.7240000000
14.14 * 0.15                           = 2.1210000000
14.14 * -0.01                          = -0.1414000000
14.14 * 0                              = 0.0000000000
14.14 * 0.00                           = 0.0000000000
14.14 * -0                             = 0.0000000000
14.14 * -0.00                          = 0.0000000000
14.14 * 15151324141414.412312232141241 = 214239723359599.7900949624
14.14 * -132132245132134.1515123765412 = -1868349946168376.9023850042
14.14 * 141241241241241248267654747412 = 1997151151151151250504638128405.6800000000
14.14 * -149143276547656984948124912   = -2108885930383869767166486255.6800000000
14.14 * 0.1322135476547459213732911312 = 1.8694995638
14.14 * -0.123912932193769965476541321 = -1.7521288612

Number "-16.60" (scale 10)
-16.60 * 15                             = -249.0000000000
-16.60 * -15                            = 249.0000000000
-16.60 * 1                              = -16.6000000000
-16.60 * -9                             = 149.4000000000
-16.60 * 14.14                          = -234.7240000000
-16.60 * -16.60                         = 275.5600000000
-16.60 * 0.15                           = -2.4900000000
-16.60 * -0.01                          = 0.1660000000
-16.60 * 0                              = 0.0000000000
-16.60 * 0.00                           = 0.0000000000
-16.60 * -0                             = 0.0000000000
-16.60 * -0.00                          = 0.0000000000
-16.60 * 15151324141414.412312232141241 = -251511980747479.2443830535
-16.60 * -132132245132134.1515123765412 = 2193395269193426.9151054505
-16.60 * 141241241241241248267654747412 = -2344604604604604721243068807039.2000000000
-16.60 * -149143276547656984948124912   = 2475778390691105950138873539.2000000000
-16.60 * 0.1322135476547459213732911312 = -2.1947448910
-16.60 * -0.123912932193769965476541321 = 2.0569546744

Number "0.15" (scale 10)
0.15 * 15                             = 2.2500000000
0.15 * -15                            = -2.2500000000
0.15 * 1                              = 0.1500000000
0.15 * -9                             = -1.3500000000
0.15 * 14.14                          = 2.1210000000
0.15 * -16.60                         = -2.4900000000
0.15 * 0.15                           = 0.0225000000
0.15 * -0.01                          = -0.0015000000
0.15 * 0                              = 0.0000000000
0.15 * 0.00                           = 0.0000000000
0.15 * -0                             = 0.0000000000
0.15 * -0.00                          = 0.0000000000
0.15 * 15151324141414.412312232141241 = 2272698621212.1618468348
0.15 * -132132245132134.1515123765412 = -19819836769820.1227268564
0.15 * 141241241241241248267654747412 = 21186186186186187240148212111.8000000000
0.15 * -149143276547656984948124912   = -22371491482148547742218736.8000000000
0.15 * 0.1322135476547459213732911312 = 0.0198320321
0.15 * -0.123912932193769965476541321 = -0.0185869398

Number "-0.01" (scale 10)
-0.01 * 15                             = -0.1500000000
-0.01 * -15                            = 0.1500000000
-0.01 * 1                              = -0.0100000000
-0.01 * -9                             = 0.0900000000
-0.01 * 14.14                          = -0.1414000000
-0.01 * -16.60                         = 0.1660000000
-0.01 * 0.15                           = -0.0015000000
-0.01 * -0.01                          = 0.0001000000
-0.01 * 0                              = 0.0000000000
-0.01 * 0.00                           = 0.0000000000
-0.01 * -0                             = 0.0000000000
-0.01 * -0.00                          = 0.0000000000
-0.01 * 15151324141414.412312232141241 = -151513241414.1441231223
-0.01 * -132132245132134.1515123765412 = 1321322451321.3415151237
-0.01 * 141241241241241248267654747412 = -1412412412412412482676547474.1200000000
-0.01 * -149143276547656984948124912   = 1491432765476569849481249.1200000000
-0.01 * 0.1322135476547459213732911312 = -0.0013221354
-0.01 * -0.123912932193769965476541321 = 0.0012391293