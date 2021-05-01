import pandas as pd

for i in range(2017, 2021):
    pitcher_table = pd.read_csv('pitcher_processing' + str(i) + '.csv')

    mean_WHIP = pitcher_table['WHIP'].mean(axis=0)
    pitcher_table['WHIP'].fillna(mean_WHIP, inplace=True) # 누락값 평균값으로 대체

    mean_piAn = pitcher_table['피안타율'].mean(axis=0)
    pitcher_table['피안타율'].fillna(mean_piAn, inplace=True)  # 누락값 평균값으로 대체

    mean_piHom = pitcher_table['피홈런율'].mean(axis=0)
    pitcher_table['피홈런율'].fillna(mean_piHom, inplace=True)  # 누락값 평균값으로 대체

    mean_sam = pitcher_table['이닝당삼진'].mean(axis=0)
    pitcher_table['이닝당삼진'].fillna(mean_sam, inplace=True)  # 누락값 평균값으로 대체

    mean_ball = pitcher_table['이닝당볼넷'].mean(axis=0)
    pitcher_table['이닝당볼넷'].fillna(mean_ball, inplace=True)  # 누락값 평균값으로 대체

    mean_ja = pitcher_table['평균자책점'].mean(axis=0)
    pitcher_table['평균자책점'].fillna(mean_ja, inplace=True)  # 누락값 평균값으로 대체

    pitcher_table.to_csv('pitcher_processing_new'+str(i)+'.csv', encoding='utf-8-sig')