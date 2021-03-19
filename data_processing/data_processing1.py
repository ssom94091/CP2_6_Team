import os
import pandas as pd
import re


def read_file(n):
    f = open(n, 'r', encoding='UTF8')
    return f.read()


cur_dir = '.'
ko_dir = cur_dir + '/processing/ko'
eng_dir = cur_dir + '/processing/eng'

ko_file_list = os.listdir(ko_dir)
eng_file_list = os.listdir(eng_dir)

ko_text = []
eng_text = []

for name in ko_file_list:
    data = read_file(ko_dir + '/' + name)
    ko_text.append(data)

for name in eng_file_list:
    data = read_file(eng_dir + '/' + name)
    eng_text.append(data)

# for data in ko_text[29:30]:
#     print(data)
# print('\n\n')

# 특수문자 제거
ko_text = [re.sub('[=+,#/\?^$.@*\"※~&%ㆍ!』\\‘|\(\)\[\]\<\>`\'…》]', '', i) for i in ko_text]
# 뛰워쓰기 2개이상 1개로 변환
ko_text = [re.sub('\s+', ' ', i) for i in ko_text]
#
shortword = re.compile(r'\W*\b\w{1,2}\b')
ko_text = [shortword.sub('', i) for i in ko_text]

# for data in ko_text[29:30]:
#     print(data)

ko_text_data = pd.DataFrame(ko_text, columns=['text'])
# eng_text_data = pd.DataFrame(eng_text, columns=['text'])

print(ko_text_data.head())


