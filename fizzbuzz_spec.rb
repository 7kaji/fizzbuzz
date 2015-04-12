require 'rspec'
require 'fuubar'

# ファイルを読み込む(定数の初期化)
require './fizzbuzz'

#FizzBuzz 与えられた数字が15のとき
describe FizzBuzz do
  # テストする対象を明示する
  subject  { FizzBuzz.new }
  # context でテストケースの状況を指定する
  context "与えられた数字が3の倍数でも5の倍数でもないとき" do
    # itメソッドが1つのテストケースになる
    it "与えられた数字を返すこと" do
      expect(subject.say(1)).to eq 1
    end 
  end 
  context "与えられた数字が3の倍数の時" do
    it { expect(subject.say(3)).to eq 'Fizz' }
  end 
  context "与えられた数字が5の倍数の時" do
    it { expect(subject.say(5)).to eq 'Buzz' }
  end 
  context "与えられた数字が3かつ5の倍数の時" do
    it { expect(subject.say(15)).to eq 'FizzBuzz' }
  end 
end
